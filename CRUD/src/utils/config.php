<?php
define('APP', dirname(__DIR__));
define('CONTROLLERS', APP.'/controllers');
define('MODELS', APP.'/models');
define('VIEWS', APP.'/views');

//datos de conexion
define('DBHOST', 'localhost:3306');
define('DBCHARSET', 'utf8mb4');
define('DBNAME', 'libros'); // Asegúrate de que esta base de datos exista
define('DBUSER', 'root'); 
define('DBPASS', ''); // Especifica la contraseña si existe