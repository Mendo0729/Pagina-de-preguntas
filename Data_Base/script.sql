-- Crear base de datos
CREATE DATABASE IF NOT EXISTS conference_questions;
USE conference_questions;

-- Crear tabla para almacenar preguntas
CREATE TABLE IF NOT EXISTS questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    question TEXT NOT NULL,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Crear tabla para administrar usuarios (administradores)
CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insertar administrador predeterminado (solo para fines de prueba)
INSERT INTO admins (username, password) VALUES ('admin', MD5('adminpass'));
