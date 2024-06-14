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
('Don Quijote de la Mancha', 'Miguel de Cervantes', 'Francisco de Robles', '2024-06-05', 'Primera');

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuarios` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
