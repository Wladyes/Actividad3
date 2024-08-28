-- Crear la base de datos 'biblioteca'
CREATE DATABASE IF NOT EXISTS biblioteca;
USE biblioteca;

-- Crear la tabla 'autores'
CREATE TABLE IF NOT EXISTS autores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    nacionalidad VARCHAR(100)
);

-- Crear la tabla 'libros'
CREATE TABLE IF NOT EXISTS libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor_id INT,
    año_publicacion INT,
    genero VARCHAR(100),
    FOREIGN KEY (autor_id) REFERENCES autores(id)
);
