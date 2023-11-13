-- Crear una base de datos llamada "crud" (si aún no existe)
CREATE DATABASE IF NOT EXISTS crud;

-- Usar la base de datos "crud"
USE crud;

-- Crear la tabla "usuarios"
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres_apellidos VARCHAR(255) NOT NULL,
    identificacion VARCHAR(20) NOT NULL,
    megas INT NOT NULL,
    zona_residencia VARCHAR(100),
    direccion VARCHAR(255)
);

-- ¡Aquí puedes agregar INSERT INTO para ingresar datos si lo deseas!
-- Ejemplo: INSERT INTO usuarios (nombres_apellidos, identificacion, megas, zona_residencia, direccion) VALUES ('Nombre Apellido', '123456', 100, 'Zona', 'Dirección');
