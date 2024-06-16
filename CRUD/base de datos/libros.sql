CREATE DATABASE IF NOT EXISTS libros;
USE libros;

DROP TABLE IF EXISTS `libros`;
CREATE TABLE `libros` (
  `idlibros` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `autor` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `editorial` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_p` DATE NOT NULL,
  `n_edicion` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idlibros`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `libros` (`nombre`, `autor`, `editorial`, `fecha_p`, `n_edicion`) VALUES
('Cien Años de Soledad', 'Gabriel García Márquez', 'Editorial Sudamericana', '2024-06-05', 'Primera'),
('Don Quijote de la Mancha', 'Miguel de Cervantes', 'Francisco de Robles', '2024-06-05', 'Primera'),
('1984', 'George Orwell', 'Secker & Warburg', '1949-06-08', 'Primera'),
('Matar a un ruiseñor', 'Harper Lee', 'J.B. Lippincott & Co.', '1960-07-11', 'Primera'),
('El Gran Gatsby', 'F. Scott Fitzgerald', 'Charles Scribners Sons', '1925-04-10', 'Primera'),
('Crimen y castigo', 'Fiódor Dostoyevski', 'The Russian Messenger', '1866-01-01', 'Primera'),
('La Odisea', 'Homero', 'Ediciones Gredos', '2024-06-05', 'Primera'),
('Orgullo y Prejuicio', 'Jane Austen', 'T. Egerton', '1813-01-28', 'Primera'),
('El principito', 'Antoine de Saint-Exupéry', 'Reynal & Hitchcock', '1943-04-06', 'Primera'),
('Ulises', 'James Joyce', 'Shakespeare and Company', '1922-02-02', 'Primera'),
('En busca del tiempo perdido', 'Marcel Proust', 'Grasset & Gallimard', '1913-11-14', 'Primera'),
('Cumbres Borrascosas', 'Emily Brontë', 'Thomas Cautley Newby', '1847-12-01', 'Primera');

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuarios` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
