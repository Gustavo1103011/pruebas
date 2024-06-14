<?php

namespace App\Views;

use App\Models\LoginModel;

require_once __DIR__ . '/../models/LoginModel.php'; 
session_start(); // Iniciar la sesión

// Verificar si se enviaron datos de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $userModel = new LoginModel();
    $user = $userModel->findByUsername($username);

    // Verificar si las credenciales coinciden
    if ($user && $user['usuario'] == $username && password_verify($password, $user['password'])) {
        // Autenticación exitosa, establecer la variable de sesión
        $_SESSION['usuario'] = $username;
        // Redirigir al usuario a la página principal
        header("Location: /pruebas/CRUD/index.php");
        exit();
    } else {
        // Redirigir con mensaje de error
        header("Location: /pruebas/CRUD/src/views/login.php?error=1");
        exit();
    }
}
?>
