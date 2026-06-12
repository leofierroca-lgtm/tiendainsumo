<?php
/**
 * Controlador AuthController - Gestiona el flujo de autenticación (Login, Registro, Logout).
 * Proyecto: AgroStock
 */

require_once __DIR__ . '/../Modelos/Usuario.php';

class AuthController {
    private $usuarioModel;

    public function __construct() {
        // Iniciar sesión si no se ha iniciado antes
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->usuarioModel = new Usuario();
    }

    /**
     * Procesa la solicitud de inicio de sesión.
     */
    public function login() {
        header('Content-Type: application/json');

        // Obtener datos recibidos (soportando JSON y POST estándar)
        $input = json_decode(file_get_contents('php://input'), true);
        $email = $input['email'] ?? $_POST['email'] ?? '';
        $password = $input['password'] ?? $_POST['password'] ?? '';

        // Validaciones básicas
        if (empty($email) || empty($password)) {
            echo json_encode([
                'success' => false,
                'message' => 'Por favor, complete todos los campos obligatorios.'
            ]);
            return;
        }

        // Limpiar inputs
        $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);

        // Buscar usuario en BD
        $usuario = $this->usuarioModel->buscarPorEmail($email);

        if ($usuario && password_verify($password, $usuario['password'])) {
            // Regenerar ID de sesión para prevenir Session Fixation
            session_regenerate_id(true);

            // Normalizar rol 'admin' a 'administrador' para mantener compatibilidad
            $rolSession = ($usuario['rol'] === 'admin') ? 'administrador' : $usuario['rol'];

            // Guardar datos en la sesión
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            $_SESSION['usuario_email'] = $usuario['email'];
            $_SESSION['usuario_rol'] = $rolSession;
            $_SESSION['ultimo_acceso'] = time();

            echo json_encode([
                'success' => true,
                'message' => '¡Inicio de sesión exitoso! Redireccionando...',
                'user' => [
                    'nombre' => $usuario['nombre'],
                    'rol' => $rolSession
                ]
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Correo electrónico o contraseña incorrectos.'
            ]);
        }
    }

    /**
     * Procesa el registro de un nuevo usuario (Cliente).
     */
    public function register() {
        header('Content-Type: application/json');

        $input = json_decode(file_get_contents('php://input'), true);
        $nombre = $input['nombre'] ?? $_POST['nombre'] ?? '';
        $email = $input['email'] ?? $_POST['email'] ?? '';
        $password = $input['password'] ?? $_POST['password'] ?? '';
        
        // Rol asignado automáticamente por seguridad y flujo limpio
        $rol = 'cliente';

        // Validaciones básicas (Se eliminó $confirmPassword)
        if (empty($nombre) || empty($email) || empty($password)) {
            echo json_encode([
                'success' => false,
                'message' => 'Todos los campos son obligatorios.'
            ]);
            return;
        }

        if (strlen($password) < 6) {
            echo json_encode([
                'success' => false,
                'message' => 'La contraseña debe tener al menos 6 caracteres.'
            ]);
            return;
        }

        $email = filter_var(trim($email), FILTER_VALIDATE_EMAIL);
        if (!$email) {
            echo json_encode([
                'success' => false,
                'message' => 'El formato del correo electrónico no es válido.'
            ]);
            return;
        }

        $nombre = htmlspecialchars(trim($nombre), ENT_QUOTES, 'UTF-8');

        // Verificar si el correo ya existe
        if ($this->usuarioModel->existeEmail($email)) {
            echo json_encode([
                'success' => false,
                'message' => 'Este correo electrónico ya se encuentra registrado.'
            ]);
            return;
        }

        // Hashear la contraseña de forma segura (BCRYPT)
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Crear el usuario pasando el rol 'cliente' por defecto
        if ($this->usuarioModel->crear($nombre, $email, $hashedPassword, $rol)) {
            echo json_encode([
                'success' => true,
                'message' => '¡Usuario registrado con éxito! Ya puede iniciar sesión.'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Ocurrió un error interno al registrar el usuario.'
            ]);
        }
    }

    /**
     * Cierra la sesión del usuario.
     */
    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();

        header("Location: ../../index.php");
        exit();
    }
}

// Enrutador rápido para peticiones AJAX
if (isset($_GET['action'])) {
    $controller = new AuthController();
    if ($_GET['action'] === 'login') {
        $controller->login();
    } elseif ($_GET['action'] === 'register') {
        $controller->register();
    } elseif ($_GET['action'] === 'logout') {
        $controller->logout();
    }
}