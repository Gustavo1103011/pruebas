<?php

namespace App\Views;

use App\Models\UserModel;

require_once __DIR__ . '/../models/UserModel.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new UserModel();
    $user->insertUser([
        'username' => $_POST['username'], // Cambia a 'username'
        'password' => $_POST['password']  // Cambia a 'password'
    ]);
    header('Location: /pruebas/CRUD/users');
    exit();
}
