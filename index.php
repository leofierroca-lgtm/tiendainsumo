<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroStock - Sistema de Gestión de Insumos y Ventas Agrícolas</title>
    <meta name="description" content="Gestión inteligente de inventarios, stock y ventas para almacenes de insumos agrícolas. Optimice su negocio de semillas, fertilizantes y agroquímicos.">
    <meta name="keywords" content="inventario agricola, insumos agricolas, control de stock, ventas de agroquímicos, facturacion agricola, AgroStock">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="AgroStock - Gestión de Insumos y Ventas Agrícolas">
    <meta property="og:description" content="Gestión inteligente de inventario y ventas. Conozca stock en tiempo real y controle sus ganancias.">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#inicio">
                <i class="fa-solid fa-leaf"></i> AgroStock
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#caracteristicas">Módulos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#simulador">Demostración</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-agro" href="#acceso">
                            <i class="fa-solid fa-right-to-bracket me-2"></i>Acceso al Sistema
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header id="inicio" class="hero-section d-flex align-items-center">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 fade-in-up">
                    <span class="hero-badge"><i class="fa-solid fa-circle-check me-2"></i>Versión 2.1 - Control Inteligente</span>
                    <h1 class="display-4 mb-3">Gestión Profesional de Insumos Agrícolas</h1>
                    <p class="lead text-muted mb-4">Optimice su stock de semillas, fertilizantes, abonos y agroquímicos con nuestro sistema especializado de inventario, facturación y control de ventas.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#acceso" class="btn btn-agro btn-lg">
                            <i class="fa-solid fa-user-lock me-2"></i>Ingresar al Portal
                        </a>
                        <a href="#simulador" class="btn btn-agro-secondary btn-lg">
                            <i class="fa-solid fa-circle-play me-2"></i>Probar Simulador
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center fade-in-up" style="animation-delay: 0.2s;">
                    <img src="https://images.unsplash.com/photo-1593113630400-ea4288922497?auto=format&fit=crop&w=600&q=80" alt="Agricultura Inteligente" class="img-fluid rounded-4 shadow-lg border border-white border-4" style="max-height: 400px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </header>

    <!-- CARACTERÍSTICAS / MÓDULOS -->
    <section id="caracteristicas" class="py-5 bg-white">
        <div class="container py-5 text-center">
            <h2 class="section-title">Módulos de AgroStock</h2>
            <p class="text-muted mb-5 col-md-8 mx-auto">Diseñado para adaptarse a las necesidades del campo y la comercialización técnica de productos agrícolas.</p>
            
            <div class="row g-4">
                <!-- Modulo 1: Productos y Categorías -->
                <div class="col-md-4">
                    <div class="card glass-panel feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <h4>Productos e Insumos</h4>
                        <p class="text-muted">Gestione fichas detalladas de agroquímicos (herbicidas, insecticidas), abonos, herramientas y semillas categorizadas para una rápida localización.</p>
                    </div>
                </div>
                
                <!-- Modulo 2: Inventario e Ingresos -->
                <div class="col-md-4">
                    <div class="card glass-panel feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                        <h4>Control de Stock y Kárdex</h4>
                        <p class="text-muted">Aviso de niveles mínimos de stock. Registre de forma automática las entradas y salidas de inventario por proveedor y evite desabastecimiento.</p>
                    </div>
                </div>
                
                <!-- Modulo 3: Ventas y Facturación -->
                <div class="col-md-4">
                    <div class="card glass-panel feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                        </div>
                        <h4>Ventas y Facturación</h4>
                        <p class="text-muted">Módulo ágil de ventas para vendedores con aplicación de descuentos, cálculo de impuestos, generación de facturas y control de métodos de pago.</p>
                    </div>
                </div>

                <!-- Modulo 4: Clientes y Proveedores -->
                <div class="col-md-4">
                    <div class="card glass-panel feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h4>Clientes y Proveedores</h4>
                        <p class="text-muted">Mantenga bases de datos sólidas con NIT/Documento, datos de contacto, historial de compras de agricultores e historial de entregas de proveedores.</p>
                    </div>
                </div>

                <!-- Modulo 5: Gastos -->
                <div class="col-md-4">
                    <div class="card glass-panel feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                        </div>
                        <h4>Gestión de Gastos</h4>
                        <p class="text-muted">Controle gastos operativos, compras de insumos adicionales y pagos de servicios. Cruce datos para calcular su ganancia neta.</p>
                    </div>
                </div>

                <!-- Modulo 6: Reportes y Ganancias -->
                <div class="col-md-4">
                    <div class="card glass-panel feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h4>Análisis y Utilidades</h4>
                        <p class="text-muted">Visualice reportes consolidados de ventas diarias, semanales, control de utilidades y exportación de reportes a PDF o Excel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INTERACTIVE SIMULATOR (DASHBOARD PREVIEW) -->
    <section id="simulador" class="py-5" style="background-color: #f1f4f0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <span class="hero-badge"><i class="fa-solid fa-gamepad me-2"></i>Demostración Interactiva</span>
                    <h2 class="mb-4 text-start">Pruebe el Sistema en Tiempo Real</h2>
                    <p class="text-muted mb-4">Hemos diseñado este simulador para que vea en directo la respuesta de la lógica de negocio. Interactúe con el inventario simulando ventas y compras de insumos agrícolas clave.</p>
                    
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Alertas de stock mínimo automatizadas.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Actualización automática de caja y ventas totales.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Historial de movimientos (Kárdex) dinámico.</li>
                    </ul>

                    <div class="alert alert-info border-0 shadow-sm glass-panel p-3">
                        <strong><i class="fa-solid fa-lightbulb me-2"></i>Consejo:</strong> Reduzca el stock de los productos para ver cómo se activa el indicador de stock crítico en rojo.
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <!-- Dashboard Mockup Frame -->
                    <div class="mockup-container">
                        <div class="mockup-header">
                            <span class="mockup-dot red"></span>
                            <span class="mockup-dot yellow"></span>
                            <span class="mockup-dot green"></span>
                            <span class="text-muted ms-3 font-monospace" style="font-size: 0.75rem;">admin_dashboard_v2.1.php</span>
                        </div>
                        
                        <div class="mockup-body">
                            <!-- Metricas -->
                            <div class="row g-3 mb-4">
                                <div class="col-6 col-sm-3">
                                    <div class="metric-card">
                                        <div class="metric-title">Caja Hoy</div>
                                        <div class="metric-value text-success" id="metric-caja">$1,250.00</div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="metric-card">
                                        <div class="metric-title">Ventas Hoy</div>
                                        <div class="metric-value" id="metric-ventas">4</div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="metric-card">
                                        <div class="metric-title">Alertas Stock</div>
                                        <div class="metric-value text-danger" id="metric-alertas">2</div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="metric-card">
                                        <div class="metric-title">Gastos</div>
                                        <div class="metric-value text-muted">$320.00</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Listado de Insumos -->
                            <h6 class="mb-3 text-muted text-uppercase font-monospace" style="font-size: 0.75rem; letter-spacing: 1px;">Control de Inventario Actual</h6>
                            
                            <!-- Producto 1 -->
                            <div class="sim-product-row d-flex align-items-center justify-content-between flex-wrap gap-2" id="prod-1">
                                <div>
                                    <strong class="text-primary">Fungicida Previcur N (Bayer)</strong>
                                    <div class="text-muted" style="font-size: 0.75rem;">
                                        Precio: $45.00 | Unidad: Litro | Mínimo: 10
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        Stock: <span class="badge bg-success" id="stock-val-1">15</span>
                                    </div>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-success" onclick="simularAbastecer(1, 'Fungicida Previcur N', 45.00)"><i class="fa-solid fa-plus"></i></button>
                                        <button class="btn btn-outline-danger" onclick="simularVender(1, 'Fungicida Previcur N', 45.00)"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Producto 2 -->
                            <div class="sim-product-row d-flex align-items-center justify-content-between flex-wrap gap-2 simulator-alert-pulse" id="prod-2">
                                <div>
                                    <strong class="text-primary">Fertilizante NPK 15-15-15 (Yara)</strong>
                                    <div class="text-muted" style="font-size: 0.75rem;">
                                        Precio: $65.00 | Unidad: Saco | Mínimo: 10
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        Stock: <span class="badge bg-danger" id="stock-val-2">3</span>
                                    </div>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-success" onclick="simularAbastecer(2, 'Fertilizante NPK 15-15-15', 65.00)"><i class="fa-solid fa-plus"></i></button>
                                        <button class="btn btn-outline-danger" onclick="simularVender(2, 'Fertilizante NPK 15-15-15', 65.00)"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Producto 3 -->
                            <div class="sim-product-row d-flex align-items-center justify-content-between flex-wrap gap-2 simulator-alert-pulse" id="prod-3">
                                <div>
                                    <strong class="text-primary">Semilla de Maíz Dekalb (Monsanto)</strong>
                                    <div class="text-muted" style="font-size: 0.75rem;">
                                        Precio: $120.00 | Unidad: Bolsa | Mínimo: 5
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        Stock: <span class="badge bg-danger" id="stock-val-3">1</span>
                                    </div>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-success" onclick="simularAbastecer(3, 'Semilla de Maíz Dekalb', 120.00)"><i class="fa-solid fa-plus"></i></button>
                                        <button class="btn btn-outline-danger" onclick="simularVender(3, 'Semilla de Maíz Dekalb', 120.00)"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Terminal de Registro / Kárdex simulado -->
                            <h6 class="mt-4 mb-2 text-muted text-uppercase font-monospace" style="font-size: 0.75rem; letter-spacing: 1px;">Historial de Movimientos de Inventario (Kárdex)</h6>
                            <div class="bg-dark text-success p-3 rounded font-monospace" style="font-size: 0.75rem; height: 120px; overflow-y: auto;" id="sim-terminal">
                                <div>[15:42] Vendedor 'Carlos R.' registró venta de 2L Fungicida Previcur N por $90.00.</div>
                                <div>[16:05] Inventario: Alerta de stock bajo para Fertilizante NPK 15-15-15 (Stock: 3).</div>
                                <div>[16:15] Inventario: Alerta de stock bajo para Semilla de Maíz Dekalb (Stock: 1).</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTAL DE ACCESO / LOGIN -->
    <section id="acceso" class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="text-center mb-5">
                        <h2 class="section-title">Acceso al Sistema</h2>
                        <p class="text-muted">Ingrese sus credenciales de acuerdo a su rol asignado en el sistema.</p>
                    </div>

                    <div class="card login-card">
                        <!-- Navigation Tabs for Roles -->
                        <ul class="nav nav-tabs nav-fill login-nav-tabs" id="loginTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin" type="button" role="tab" aria-controls="admin" aria-selected="true" onclick="actualizarCredencialesDemo('administrador')">
                                    <i class="fa-solid fa-user-tie me-2"></i>Admin
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="vendedor-tab" data-bs-toggle="tab" data-bs-target="#vendedor" type="button" role="tab" aria-controls="vendedor" aria-selected="false" onclick="actualizarCredencialesDemo('vendedor')">
                                    <i class="fa-solid fa-store me-2"></i>Vendedor
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="cliente-tab" data-bs-toggle="tab" data-bs-target="#cliente" type="button" role="tab" aria-controls="cliente" aria-selected="false" onclick="actualizarCredencialesDemo('cliente')">
                                    <i class="fa-solid fa-tractor me-2"></i>Cliente
                                </button>
                            </li>
                        </ul>

                        <div class="login-form-body">
                            <h4 class="mb-4 text-center text-primary" id="login-title">Inicio de Sesión - Administrador</h4>
                            
                            <form id="loginForm" onsubmit="realizarLoginDemo(event)">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="email" class="form-control form-control-agro border-start-0" id="email" placeholder="correo@ejemplo.com" required value="admin@agrostock.com">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <label for="password" class="form-label mb-0">Contraseña</label>
                                        <a href="#" class="text-secondary text-decoration-none" style="font-size: 0.85rem;" onclick="alert('Funcionalidad de recuperación de contraseña: Se enviará un enlace de restablecimiento al correo electrónico.')">¿Olvidó su contraseña?</a>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-lock"></i></span>
                                        <input type="password" class="form-control form-control-agro border-start-0" id="password" placeholder="••••••••" required value="admin123">
                                    </div>
                                </div>
                                
                                <div class="d-grid mb-3">
                                    <button type="submit" class="btn btn-agro btn-lg">Ingresar</button>
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-link text-success text-decoration-none" onclick="cargarCredencialesAuto()">
                                        <i class="fa-solid fa-magic-wand-sparkles me-2"></i>Cargar credenciales de prueba
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT / INFO SECTION -->
    <section id="contacto" class="py-5 bg-white border-top border-light">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3>¿Necesita ayuda para configurar el sistema?</h3>
                    <p class="text-muted">Si requiere asistencia técnica para integrar la base de datos o ajustar los reportes financieros a su modelo de negocio, no dude en contactarnos.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a href="mailto:soporte@agrostock.com" class="btn btn-agro-secondary btn-lg me-3">
                        <i class="fa-solid fa-envelope me-2"></i>Enviar Correo
                    </a>
                    <a href="tel:+57300000000" class="btn btn-agro btn-lg">
                        <i class="fa-solid fa-phone me-2"></i>Llamar a Soporte
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-section">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <h5 class="font-monospace text-uppercase" style="letter-spacing: 1px;"><i class="fa-solid fa-leaf text-success me-2"></i>AgroStock</h5>
                    <p class="small text-muted">Solución informática integral para el control de inventarios, registro de ventas diarias, gastos y optimización de cadenas de suministro de insumos del sector agrícola.</p>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#inicio" class="footer-link">Inicio</a></li>
                        <li><a href="#caracteristicas" class="footer-link">Módulos del Sistema</a></li>
                        <li><a href="#simulador" class="footer-link">Demostración Interactiva</a></li>
                        <li><a href="#acceso" class="footer-link">Ingreso Portal</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Módulos Destacados</h5>
                    <ul class="list-unstyled">
                        <li><span class="small text-muted">Kárdex de Movimiento de Insumos</span></li>
                        <li><span class="small text-muted">Facturación & Impuestos (IVA)</span></li>
                        <li><span class="small text-muted">Alertas Inteligentes de Stock Mínimo</span></li>
                        <li><span class="small text-muted">Reportes de Ganancias y Pérdidas</span></li>
                    </ul>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.1);">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0">&copy; 2026 AgroStock. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small mb-0">Diseñado con <i class="fa-solid fa-heart text-danger"></i> para el sector agropecuario.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Toast Notification container for Simulated Login/Actions -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="simToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body" id="toast-message">
                    ¡Simulación completada con éxito!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- LOGIC FOR DASHBOARD & LOGIN SIMULATION -->
    <script>
        // --- VARIABLES DE ESTADO DEL SIMULADOR ---
        let cajaTotal = 1250.00;
        let totalVentas = 4;
        let alertasStock = 2;
        
        // Modelos de productos simulados
        const productos = {
            1: { nombre: 'Fungicida Previcur N', stock: 15, minimo: 10, precio: 45.00 },
            2: { nombre: 'Fertilizante NPK 15-15-15', stock: 3, minimo: 10, precio: 65.00 },
            3: { nombre: 'Semilla de Maíz Dekalb', stock: 1, minimo: 5, precio: 120.00 }
        };

        // Credenciales demo por rol
        const credenciales = {
            administrador: { email: 'admin@agrostock.com', pass: 'admin123', nombre: 'Administrador' },
            vendedor: { email: 'vendedor@agrostock.com', pass: 'vendedor123', nombre: 'Vendedor (Carlos R.)' },
            cliente: { email: 'cliente@agrostock.com', pass: 'cliente123', nombre: 'Cliente (Finca La Esperanza)' }
        };

        let rolSeleccionado = 'administrador';

        // --- LÓGICA DEL SIMULADOR DE INVENTARIO ---

        function actualizarMetricasVisuales() {
            document.getElementById('metric-caja').innerText = `$${cajaTotal.toFixed(2)}`;
            document.getElementById('metric-ventas').innerText = totalVentas;
            document.getElementById('metric-alertas').innerText = alertasStock;
        }

        function simularAbastecer(id, nombre, precio) {
            const prod = productos[id];
            prod.stock += 10;
            
            // Actualizar Badge del stock
            const badge = document.getElementById(`stock-val-${id}`);
            badge.innerText = prod.stock;

            // Verificar si sale de estado crítico
            const prodRow = document.getElementById(`prod-${id}`);
            if (prod.stock >= prod.minimo) {
                badge.className = "badge bg-success";
                if (prodRow.classList.contains('simulator-alert-pulse')) {
                    prodRow.classList.remove('simulator-alert-pulse');
                    alertasStock = Math.max(0, alertasStock - 1);
                }
            }

            actualizarMetricasVisuales();
            registrarLog(`[Abastecimiento] Se ingresaron +10 unidades de '${nombre}' al stock. Total: ${prod.stock}`);
            mostrarNotificacion(`¡Abastecido con éxito! Stock de ${nombre} es ahora ${prod.stock}.`, 'bg-success');
        }

        function simularVender(id, nombre, precio) {
            const prod = productos[id];
            if (prod.stock <= 0) {
                mostrarNotificacion(`Error: No hay stock suficiente de ${nombre} para realizar la venta.`, 'bg-danger');
                registrarLog(`[Venta Fallida] Intento de vender '${nombre}' sin stock disponible.`);
                return;
            }

            prod.stock -= 1;
            
            // Actualizar Badge del stock
            const badge = document.getElementById(`stock-val-${id}`);
            badge.innerText = prod.stock;

            // Verificar si entra en estado crítico
            const prodRow = document.getElementById(`prod-${id}`);
            if (prod.stock < prod.minimo) {
                badge.className = "badge bg-danger";
                if (!prodRow.classList.contains('simulator-alert-pulse')) {
                    prodRow.classList.add('simulator-alert-pulse');
                    alertasStock += 1;
                }
            }

            // Actualizar Métricas de Negocio
            cajaTotal += precio;
            totalVentas += 1;

            actualizarMetricasVisuales();
            registrarLog(`[Venta] Se vendió 1 unidad de '${nombre}' por $${precio.toFixed(2)}. stock: ${prod.stock}`);
            mostrarNotificacion(`¡Venta realizada! +$${precio.toFixed(2)} agregados a la caja diaria.`, 'bg-success');
        }

        function registrarLog(mensaje) {
            const terminal = document.getElementById('sim-terminal');
            const ahora = new Date();
            const horaString = ahora.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' });
            
            const nuevoLog = document.createElement('div');
            nuevoLog.innerText = `[${horaString}] ${mensaje}`;
            terminal.appendChild(nuevoLog);
            terminal.scrollTop = terminal.scrollHeight;
        }

        // --- LÓGICA DE INICIO DE SESIÓN SIMULADO ---

        function actualizarCredencialesDemo(rol) {
            rolSeleccionado = rol;
            
            // Actualizar título
            const titleMap = {
                administrador: 'Inicio de Sesión - Administrador',
                vendedor: 'Inicio de Sesión - Vendedor',
                cliente: 'Inicio de Sesión - Cliente'
            };
            document.getElementById('login-title').innerText = titleMap[rol];

            // Cargar credenciales por defecto del rol seleccionado
            const emailInput = document.getElementById('email');
            const passInput = document.getElementById('password');
            
            emailInput.value = credenciales[rol].email;
            passInput.value = credenciales[rol].pass;
        }

        function cargarCredencialesAuto() {
            actualizarCredencialesDemo(rolSeleccionado);
            mostrarNotificacion(`Credenciales de prueba cargadas para el rol ${credenciales[rolSeleccionado].nombre}`, 'bg-success');
        }

        function realizarLoginDemo(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const pass = document.getElementById('password').value;

            const rolActual = credenciales[rolSeleccionado];

            if (email === rolActual.email && pass === rolActual.pass) {
                mostrarNotificacion(`¡Bienvenido al sistema! Ha iniciado sesión con éxito como ${rolActual.nombre}. Redireccionando a los módulos del sistema...`, 'bg-success');
                registrarLog(`[Sesión] Inicio de sesión exitoso. Usuario: ${rolActual.nombre} (${email})`);
            } else {
                mostrarNotificacion(`Error de autenticación. Verifique su correo o contraseña de prueba.`, 'bg-danger');
                registrarLog(`[Sesión Fallida] Intento de acceso erróneo en el rol: ${rolActual.nombre}`);
            }
        }

        // --- NOTIFICACIONES TOAST ---
        function mostrarNotificacion(mensaje, bgClass) {
            const toastElement = document.getElementById('simToast');
            const toastMsg = document.getElementById('toast-message');
            
            // Reset clases bg
            toastElement.className = `toast align-items-center text-white border-0 ${bgClass}`;
            toastMsg.innerText = mensaje;
            
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
        }
    </script>
</body>
</html>
