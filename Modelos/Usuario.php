<?php
/**
 * Modelo Usuario - Representa la entidad de usuarios y maneja sus operaciones de base de datos.
 * Proyecto: AgroStock
 */

// Si no está importado previamente, cargamos la conexión.
require_once __DIR__ . '/../config/Conexion.php';

class Usuario {
    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    /**
     * Busca un usuario por su dirección de correo electrónico.
     * @param string $email
     * @return array|false Retorna el arreglo asociativo del usuario o false si no existe.
     */
    public function buscarPorEmail($email) {
        try {
            $query = "SELECT u.id_usuario AS id, u.nombre, u.email, u.password, r.nombre AS rol, u.estado 
                      FROM usuarios u 
                      INNER JOIN roles r ON u.id_rol = r.id_rol 
                      WHERE u.email = :email LIMIT 1";
            $stmt = $this->db->prepare($query);
            $stmt->execute(['email' => $email]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            error_log("Error en Usuario::buscarPorEmail: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Registra un nuevo usuario en la base de datos con contraseña cifrada.
     * @param string $nombre
     * @param string $email
     * @param string $password Contraseña ya cifrada con password_hash
     * @param string $rol ('administrador', 'vendedor', 'cliente')
     * @return bool Retorna true si el registro fue exitoso o false en caso de error.
     */
    public function crear($nombre, $email, $password, $rol) {
        try {
            // Mapear rol a la base de datos (administrador -> admin, vendedor -> vendedor, cliente -> cliente)
            $rolNombre = trim(strtolower($rol));
            if ($rolNombre === 'administrador') {
                $rolNombre = 'admin';
            }

            // Obtener el id_rol de la tabla roles
            $queryRol = "SELECT id_rol FROM roles WHERE nombre = :rolNombre LIMIT 1";
            $stmtRol = $this->db->prepare($queryRol);
            $stmtRol->execute(['rolNombre' => $rolNombre]);
            $rolRow = $stmtRol->fetch();

            if (!$rolRow) {
                // Si el rol no se encuentra, asignamos por defecto el rol de cliente (ID 2)
                $id_rol = 2;
            } else {
                $id_rol = $rolRow['id_rol'];
            }

            $query = "INSERT INTO usuarios (nombre, email, password, id_rol, estado, fecha_creacion) 
                      VALUES (:nombre, :email, :password, :id_rol, :estado, :fecha_creacion)";
            $stmt = $this->db->prepare($query);
            return $stmt->execute([
                'nombre' => $nombre,
                'email' => $email,
                'password' => $password,
                'id_rol' => $id_rol,
                'estado' => 1,
                'fecha_creacion' => date('Y-m-d H:i:s')
            ]);
        } catch (PDOException $e) {
            error_log("Error en Usuario::crear: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Verifica si un correo electrónico ya está registrado.
     * @param string $email
     * @return bool True si el correo ya existe, false de lo contrario.
     */
    public function existeEmail($email) {
        try {
            $query = "SELECT COUNT(*) as total FROM usuarios WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->execute(['email' => $email]);
            $result = $stmt->fetch();
            return $result['total'] > 0;
        } catch (PDOException $e) {
            error_log("Error en Usuario::existeEmail: " . $e->getMessage());
            return false;
        }
    }
}
