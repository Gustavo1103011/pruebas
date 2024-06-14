<?php
// logout.php


session_start(); // Iniciar la sesión

// Destruir todas las variables de sesión
$_SESSION = array();

// Si se desea eliminar la cookie de sesión, se debe establecer una fecha de expiración pasada
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Finalmente, destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión o a cualquier otra página deseada
header("Location: /pruebas/CRUD/src/views/login.php");
exit();
?>