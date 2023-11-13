-- Crear una base de datos llamada "crud" (si aún no existe)
CREATE DATABASE IF NOT EXISTS login_crud;

-- Usar la base de datos "crud"
USE login_crud;

CREATE TABLE Usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(255) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    fecha_creacion TIMESTAMP NOT NULL,
    fecha_edicion TIMESTAMP,
    fecha_eliminacion TIMESTAMP
);
