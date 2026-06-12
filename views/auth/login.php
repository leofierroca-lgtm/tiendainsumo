<?php
/**
 * Vista de Login - Portal de Acceso Profesional
 * Proyecto: AgroStock
 */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redireccionar al inicio si ya tiene sesión activa
if (isset($_SESSION['usuario_id'])) {
    header("Location: ../../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroStock - Acceso al Portal</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/css/style.css">
    
    <style>
        body {
            background-color: #f0f4f1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-body);
        }

        .login-wrapper {
            background-color: #ffffff;
            border-radius: var(--border-radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            width: 100%;
            max-width: 1000px;
            min-height: 600px;
            border: 1px solid rgba(30, 70, 32, 0.05);
        }

        .brand-side {
            background: linear-gradient(135deg, rgba(30, 70, 32, 0.95), rgba(76, 175, 80, 0.85)), 
                        url('https://images.unsplash.com/photo-1592982537447-6f2a6a0c7c18?auto=format&fit=crop&w=800&q=80');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }

        .brand-logo {
            font-family: var(--font-heading);
            font-weight: 800;
            font-size: 2rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand-logo i {
            color: #81c784;
            filter: drop-shadow(0 2px 8px rgba(76, 175, 80, 0.4));
        }

        .brand-features {
            margin-top: 40px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 25px;
        }

        .feature-item i {
            font-size: 1.25rem;
            color: #81c784;
            background: rgba(255, 255, 255, 0.1);
            padding: 10px;
            border-radius: var(--border-radius-sm);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .form-side {
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header h2 {
            font-weight: 800;
            color: var(--color-primary);
            margin-bottom: 10px;
        }

        .role-badge-btn {
            background-color: rgba(30, 70, 32, 0.04);
            border: 1.5px solid transparent;
            color: var(--color-primary);
            font-weight: 600;
            font-size: 0.85rem;
            border-radius: 50px;
            padding: 8px 16px;
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .role-badge-btn:hover {
            background-color: rgba(30, 70, 32, 0.08);
            transform: translateY(-1px);
        }

        .role-badge-btn.active {
            background-color: rgba(76, 175, 80, 0.15);
            border-color: var(--color-secondary);
            color: var(--color-success);
        }

        .input-group-agro {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group-agro input {
            padding-left: 45px;
            height: 50px;
        }

        .input-group-agro .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #889289;
            z-index: 10;
            transition: color var(--transition-fast);
        }

        .input-group-agro input:focus ~ .input-icon {
            color: var(--color-secondary);
        }

        .input-group-agro .toggle-password {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #889289;
            border: none;
            background: transparent;
            cursor: pointer;
            z-index: 10;
        }

        .btn-loading-spinner {
            display: none;
        }
    </style>
</head>
<body>

    <div class="container d-flex justify-content-center py-5">
        <div class="row login-wrapper g-0">
            <!-- Brand Panel (Left Side) -->
            <div class="col-lg-5 brand-side d-none d-lg-flex">
                <div class="brand-logo">
                    <i class="fa-solid fa-leaf"></i> AgroStock
                </div>
                
                <div>
                    <h3 class="font-monospace text-uppercase" style="font-size: 0.9rem; letter-spacing: 2px; color: #a5d6a7;">Portal de Ingreso</h3>
                    <h1 class="display-font mt-2 mb-4" style="color: #ffffff; font-size: 2.2rem;">Gestión Profesional de Insumos</h1>
                    <p style="color: rgba(255, 255, 255, 0.8);">Acceda a la suite de inventario, facturación integrada y contabilidad agrícola más avanzada del mercado.</p>
                    
                    <div class="brand-features">
                        <div class="feature-item">
                            <i class="fa-solid fa-shield-halved"></i>
                            <div>
                                <h6 class="mb-0 text-white font-monospace">Seguridad Bancaria</h6>
                                <p class="small mb-0" style="color: rgba(255,255,255,0.7);">Cifrado adaptativo BCRYPT y control estricto de accesos RBAC.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fa-solid fa-chart-pie"></i>
                            <div>
                                <h6 class="mb-0 text-white font-monospace">Monitoreo en Tiempo Real</h6>
                                <p class="small mb-0" style="color: rgba(255,255,255,0.7);">Alertas críticas de stock mínimo y trazabilidad de lotes.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small" style="color: rgba(255, 255, 255, 0.6);">
                    &copy; 2026 AgroStock. Todos los derechos reservados.
                </div>
            </div>

            <!-- Form Panel (Right Side) -->
            <div class="col-lg-7 form-side">
                <div class="form-header">
                    <div class="brand-logo d-lg-none mb-4" style="color: var(--color-primary);">
                        <i class="fa-solid fa-leaf"></i> AgroStock
                    </div>
                    <h2>Iniciar Sesión</h2>
                    <p class="text-muted">Ingrese sus credenciales para acceder al sistema.</p>
                </div>

                <!-- Credenciales demo -->
                <div class="alert alert-info border-0 shadow-sm rounded-4 p-3 mb-4 mt-2" style="background-color: rgba(76, 175, 80, 0.06);">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fa-solid fa-magic-wand-sparkles text-success me-2"></i>
                        <strong class="text-success" style="font-size: 0.9rem;">Credenciales de Prueba (Clic para cargar):</strong>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="role-badge-btn active" id="demo-admin" onclick="cargarDemo('admin')">
                            <i class="fa-solid fa-user-tie me-1"></i>Admin
                        </button>
                        <button type="button" class="role-badge-btn" id="demo-vendedor" onclick="cargarDemo('vendedor')">
                            <i class="fa-solid fa-store me-1"></i>Vendedor
                        </button>
                        <button type="button" class="role-badge-btn" id="demo-cliente" onclick="cargarDemo('cliente')">
                            <i class="fa-solid fa-tractor me-1"></i>Cliente
                        </button>
                    </div>
                </div>

                <!-- Alert container -->
                <div id="alert-container"></div>

                <!-- Login Form -->
                <form id="loginForm" novalidate>
                    <div class="input-group-agro">
                        <i class="fa-solid fa-envelope input-icon"></i>
                        <input type="email" class="form-control form-control-agro" id="email" placeholder="Correo electrónico" required value="admin@agrostock.com">
                    </div>

                    <div class="input-group-agro">
                        <i class="fa-solid fa-lock input-icon"></i>
                        <input type="password" class="form-control form-control-agro" id="password" placeholder="Contraseña" required value="admin123">
                        <button type="button" class="toggle-password" onclick="togglePasswordVisibility()">
                            <i class="fa-solid fa-eye" id="password-eye"></i>
                        </button>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label text-muted small" for="rememberMe">
                                Recordar sesión
                            </label>
                        </div>
                        <a href="#" class="text-decoration-none text-success small fw-semibold" onclick="alert('Se enviará un correo con instrucciones de recuperación.')">¿Olvidó su contraseña?</a>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-agro btn-lg py-3" id="submitBtn">
                            <span class="btn-text">Ingresar al Portal</span>
                            <span class="spinner-border spinner-border-sm btn-loading-spinner text-white" role="status" aria-hidden="true"></span>
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="text-muted small mb-0">¿No tiene una cuenta? 
                            <a href="register.php" class="text-success fw-bold text-decoration-none ms-1">Regístrese aquí</a>
                        </p>
                        <div class="mt-4">
                            <a href="../../index.php" class="text-muted text-decoration-none small">
                                <i class="fa-solid fa-arrow-left me-2"></i>Volver a la página principal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AJAX & UI JS -->
    <script>
        // Credenciales demo
        const creds = {
            admin: { email: 'admin@agrostock.com', pass: 'admin123' },
            vendedor: { email: 'vendedor@agrostock.com', pass: 'vendedor123' },
            cliente: { email: 'cliente@agrostock.com', pass: 'cliente123' }
        };

        function cargarDemo(rol) {
            // Activar botón
            document.querySelectorAll('.role-badge-btn').forEach(btn => btn.classList.remove('active'));
            document.getElementById(`demo-${rol}`).classList.add('active');

            // Cargar credenciales
            document.getElementById('email').value = creds[rol].email;
            document.getElementById('password').value = creds[rol].pass;
        }

        function togglePasswordVisibility() {
            const pwdInput = document.getElementById('password');
            const eyeIcon = document.getElementById('password-eye');
            if (pwdInput.type === 'password') {
                pwdInput.type = 'text';
                eyeIcon.className = 'fa-solid fa-eye-slash';
            } else {
                pwdInput.type = 'password';
                eyeIcon.className = 'fa-solid fa-eye';
            }
        }

        // Envío del Formulario vía AJAX (Fetch API)
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const submitBtn = document.getElementById('submitBtn');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnSpinner = submitBtn.querySelector('.btn-loading-spinner');
            const alertContainer = document.getElementById('alert-container');

            // Validar frontend
            if (!email || !password) {
                showAlert('danger', 'Por favor, complete todos los campos.');
                return;
            }

            // UI en estado de carga
            submitBtn.disabled = true;
            btnText.style.opacity = '0.5';
            btnSpinner.style.display = 'inline-block';
            alertContainer.innerHTML = '';

            // Petición AJAX al controlador
            fetch('../../controladores/AuthController.php?action=login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ email, password })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error de red en el servidor.');
                }
                return response.json();
            })
            .then(data => {
                // Restaurar botón
                submitBtn.disabled = false;
                btnText.style.opacity = '1';
                btnSpinner.style.display = 'none';

                if (data.success) {
                    showAlert('success', `<i class="fa-solid fa-circle-check me-2"></i> ${data.message}`);
                    setTimeout(() => {
                        window.location.href = '../../index.php';
                    }, 1500);
                } else {
                    showAlert('danger', `<i class="fa-solid fa-triangle-exclamation me-2"></i> ${data.message}`);
                }
            })
            .catch(error => {
                submitBtn.disabled = false;
                btnText.style.opacity = '1';
                btnSpinner.style.display = 'none';
                showAlert('danger', `<i class="fa-solid fa-circle-xmark me-2"></i> Error al conectar con el servidor. Por favor, asegúrese de que la base de datos esté activa e inténtelo de nuevo.`);
                console.error(error);
            });
        });

        function showAlert(type, message) {
            const alertContainer = document.getElementById('alert-container');
            alertContainer.innerHTML = `
                <div class="alert alert-${type} alert-dismissible fade show border-0 rounded-3 shadow-sm py-3 mb-4" role="alert">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;
        }
    </script>
</body>
</html>
