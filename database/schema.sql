-- Creación de la base de datos si no existe (opcional)
CREATE DATABASE IF NOT EXISTS `tiendainsumo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `tiendainsumo`;

-- Tabla de Usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `rol` ENUM('administrador', 'vendedor', 'cliente') NOT NULL DEFAULT 'cliente',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar credenciales de prueba con contraseñas cifradas con BCRYPT
-- admin123 -> $2y$10$Gqf3x.b4FhwgV4yUKsB3lefElQGu6lP4Jxm53VDrM3GBm/9fSaXai
-- vendedor123 -> $2y$10$R/PQRCExehVztZ2.sksvI.eO1sUftl28b64Fq.P0IbSuKigJKVE0.
-- cliente123 -> $2y$10$dL.KIBba6ZAnUo2lgirrXOE/vo4.5TP5HKIXxvns8f9H5e/ftAeOm
INSERT INTO `usuarios` (`nombre`, `email`, `password`, `rol`) VALUES
('Administrador AgroStock', 'admin@agrostock.com', '$2y$10$Gqf3x.b4FhwgV4yUKsB3lefElQGu6lP4Jxm53VDrM3GBm/9fSaXai', 'administrador'),
('Carlos Ruiz (Vendedor)', 'vendedor@agrostock.com', '$2y$10$R/PQRCExehVztZ2.sksvI.eO1sUftl28b64Fq.P0IbSuKigJKVE0.', 'vendedor'),
('Finca La Esperanza (Cliente)', 'cliente@agrostock.com', '$2y$10$dL.KIBba6ZAnUo2lgirrXOE/vo4.5TP5HKIXxvns8f9H5e/ftAeOm', 'cliente')
ON DUPLICATE KEY UPDATE `nombre` = VALUES(`nombre`), `password` = VALUES(`password`), `rol` = VALUES(`rol`);
