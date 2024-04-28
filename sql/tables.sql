CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(50) NOT NULL,
    primer_nombre VARCHAR(50) NOT NULL,
    segundo_nombre VARCHAR(50) NOT NULL,
    primer_apellido VARCHAR(50) NOT NULL,
    segundo_apellido VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    rol VARCHAR(20) NOT NULL,
    activo BIT DEFAULT 1
);
CREATE TABLE sesiones_usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    fecha_conexion DATETIME NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);
CREATE TABLE bans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    motivo VARCHAR(255) NOT NULL,
    fecha_ban DATETIME NOT NULL,
    fecha_desban DATETIME,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);
CREATE TABLE sugerencias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    mensaje VARCHAR(255) NOT NULL,
    fecha_sugerencia TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);
