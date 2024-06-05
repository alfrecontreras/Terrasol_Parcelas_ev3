CREATE DATABASE ciisa_backend_v1_71;
CREATE USER 'ciisa_backend_v1_71'@'localhost' IDENTIFIED BY 'l4cl4v3-c11s4';
GRANT ALL PRIVILEGES ON ciisa_backend_v1_71.* TO 'ciisa_backend_v1_71'@'localhost';
FLUSH PRIVILEGES;

CREATE TABLE IF NOT EXISTS categoria_servicio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS info_contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    telefono VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS historia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion TEXT NOT NULL,
    imagenes TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS pregunta_frecuente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pregunta VARCHAR(255) NOT NULL,
    respuesta TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS parcela (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(255) NOT NULL,
    lote VARCHAR(255) NOT NULL,
    servicios JSON NOT NULL
);

-- Insertar datos de ejemplo en la tabla categoria_servicio
INSERT INTO categoria_servicio (nombre) VALUES ('Servicio 1'), ('Servicio 2'), ('Servicio 3');

-- Insertar datos de ejemplo en la tabla info_contacto
INSERT INTO info_contacto (telefono, email, direccion) VALUES ('+56 9 5018 6583', 'ejemplo@mail.com', 'Entre Talca y la Region de Los Lagos');

-- Insertar datos de ejemplo en la tabla historia
INSERT INTO historia (descripcion, imagenes) VALUES ('Historia de prueba', '["imagen1.jpg", "imagen2.jpg"]');

-- Insertar datos de ejemplo en la tabla pregunta_frecuente
INSERT INTO pregunta_frecuente (pregunta, respuesta) VALUES ('¿Pregunta de prueba?', 'Respuesta de prueba');

-- Insertar datos de ejemplo en la tabla parcela
INSERT INTO parcela (tipo, lote, servicios) VALUES ('Tipo de prueba', 'Lote de prueba', '["Servicio1", "Servicio2"]');