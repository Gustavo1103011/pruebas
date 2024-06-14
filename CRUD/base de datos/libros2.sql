DROP DATABASE IF EXISTS libros2;
CREATE DATABASE libros2 CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci;
USE libros2;

CREATE TABLE libros (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(200) NOT NULL,
    autor VARCHAR(50) NOT NULL,
    editorial VARCHAR(50) NOT NULL,
    fecha_p VARCHAR(50) NOT NULL,
    n_edicion VARCHAR(20) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE usuarios (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(200) NOT NULL,
    pass VARCHAR(50) NOT NULL
) ENGINE=InnoDB;
