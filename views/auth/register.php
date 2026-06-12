<?php
/**
 * Vista de Registro - Portal de Registro Autónomo
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
    <title>AgroStock - Crear Cuenta</title>
    
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
                        url('https://images.unsplash.com/photo-1593113630400-ea4288922497?auto=format&fit=crop&w=800&q=80');
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

        .input-group-agro {
            position: relative;
            margin-bottom: 15px;
        }

        .input-group-agro input, .input-group-agro select {
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

        .input-group-agro input:focus ~ .input-icon,
        .input-group-agro select:focus ~ .input-icon {
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
                    <h3 class="font-monospace text-uppercase" style="font-size: 0.9rem; letter-spacing: 2px; color: #a5d6a7;">Registro de Usuarios</h3>
                    <h1 class="display-font mt-2 mb-4" style="color: #ffffff; font-size: 2.2rem;">Únase a la Plataforma</h1>
                    <p style="color: rgba(255, 255, 255, 0.8);">Regístrese de manera autónoma para acceder al catálogo interactivo de insumos y descargar su historial de facturas.</p>
                    
                    <div class="brand-features">
                        <div class="feature-item">
                            <i class="fa-solid fa-seedling"></i>
                            <div>
                                <h6 class="mb-0 text-white font-monospace">Catálogo en Tiempo Real</h6>
                                <p class="small mb-0" style="color: rgba(255,255,255,0.7);">Visualice disponibilidad y fichas técnicas de semillas, abonos y agroquímicos.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fa-solid fa-receipt"></i>
                            <div>
                                <h6 class="mb-0 text-white font-monospace">Historial Contable</h6>
                                <p class="small mb-0" style="color: rgba(255,255,255,0.7);">Descargue copias y duplicados de sus facturas de compra en formato PDF.</p>
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
                    <h2>Crear una Cuenta</h2>
                    <p class="text-muted">Ingrese la información requerida para registrarse.</p>
                </div>

                <!-- Alert container -->
                <div id="alert-container"></div>

                <!-- Register Form -->
                <form id="registerForm" novalidate>
                    <!-- Nombre -->
                    <div class="input-group-agro">
                        <i class="fa-solid fa-user input-icon"></i>
                        <input type="text" class="form-control form-control-agro" id="nombre" placeholder="Nombre completo o Razón Social" required>
                    </div>

                    <!-- Email -->
                    <div class="input-group-agro">
                        <i class="fa-solid fa-envelope input-icon"></i>
                        <input type="email" class="form-control form-control-agro" id="email" placeholder="Correo electrónico" required>
                    </div>

                    <!-- Password -->
                    <div class="input-group-agro">
                        <i class="fa-solid fa-lock input-icon"></i>
                        <input type="password" class="form-control form-control-agro" id="password" placeholder="Contraseña (Mín. 6 caracteres)" required>
                        <button type="button" class="toggle-password" onclick="togglePasswordVisibility('password', 'pwd-eye-1')">
                            <i class="fa-solid fa-eye" id="pwd-eye-1"></i>
                        </button>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-agro btn-lg py-3" id="submitBtn">
                            <span class="btn-text">Registrarse en el Sistema</span>
                            <span class="spinner-border spinner-border-sm btn-loading-spinner text-white" role="status" aria-hidden="true"></span>
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="text-muted small mb-0">¿Ya tiene una cuenta? 
                            <a href="login.php" class="text-success fw-bold text-decoration-none ms-1">Inicie sesión aquí</a>
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
        function togglePasswordVisibility(fieldId, eyeId) {
            const pwdInput = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(eyeId);
            if (pwdInput.type === 'password') {
                pwdInput.type = 'text';
                eyeIcon.className = 'fa-solid fa-eye-slash';
            } else {
                pwdInput.type = 'password';
                eyeIcon.className = 'fa-solid fa-eye';
            }
        }

        // Envío del Formulario vía AJAX (Fetch API)
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const nombre = document.getElementById('nombre').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            
            const submitBtn = document.getElementById('submitBtn');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnSpinner = submitBtn.querySelector('.btn-loading-spinner');
            const alertContainer = document.getElementById('alert-container');

            // Validar frontend
            if (!nombre || !email || !password) {
                showAlert('danger', 'Todos los campos son obligatorios.');
                return;
            }

            if (password.length < 6) {
                showAlert('danger', 'La contraseña debe tener al menos 6 caracteres.');
                return;
            }

            // UI en estado de carga
            submitBtn.disabled = true;
            btnText.style.opacity = '0.5';
            btnSpinner.style.display = 'inline-block';
            alertContainer.innerHTML = '';

            // Petición AJAX al controlador
            fetch('../../controladores/AuthController.php?action=register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ nombre, email, password })
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
                    document.getElementById('registerForm').reset();
                    setTimeout(() => {
                        window.location.href = 'login.php';
                    }, 2000);
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
