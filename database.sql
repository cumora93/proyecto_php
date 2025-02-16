CREATE DATABASE proyecto_php;
USE proyecto_php;

CREATE TABLE equipos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    ciudad VARCHAR(255),
    deporte VARCHAR(255),
    date_add DATE NOT NULL
);

CREATE TABLE jugadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    numero INT,
    equipo_id INT,
    FOREIGN KEY (equipo_id) REFERENCES equipos(id) ON DELETE CASCADE
);