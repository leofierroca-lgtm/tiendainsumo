<?php
/**
 * Clase Conexion - Administra la conexión a la base de datos MySQL usando PDO.
 * Proyecto: AgroStock
 */
class Conexion {
    private static $host = "localhost";
    private static $dbname = "bdtienda";
    private static $usuario = "root";
    private static $password = "";
    private static $charset = "utf8mb4";
    private static $conexion = null;

    /**
     * Obtiene la instancia única de conexión PDO (Patrón Singleton simplificado).
     * @return PDO
     */
    public static function conectar() {
        if (self::$conexion === null) {
            try {
                $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=" . self::$charset;
                $opciones = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                
                self::$conexion = new PDO($dsn, self::$usuario, self::$password, $opciones);
            } catch (PDOException $e) {
                // En producción, evitar mostrar detalles sensibles en pantalla.
                die("Error crítico de conexión a la base de datos: " . $e->getMessage());
            }
        }
        return self::$conexion;
    }
}
