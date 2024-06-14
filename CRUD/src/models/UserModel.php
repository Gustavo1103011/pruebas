<?php

namespace App\Models;

use PDO;
use PDOException;

include_once __DIR__ . '/../utils/config.php';

class UserModel {
    private $pdo;
    private int $id;
    private string $usuario;
    private string $contraseña;

    public function getId(): int {
        return $this->id;
    }

    public function getUsuario(): string {
        return $this->usuario;
    }

    public function getContraseña(): string {
        return $this->contraseña;
    }

    private function setId($id): void {
        if ($id !== null) {
            $this->id = (int) $id;
        }
    }
        
    public function setUsuario(string $usuario): void {
        $this->usuario = $usuario;
    }

    public function setContraseña(string $contraseña): void {
        $this->contraseña = $contraseña;
    }
        
    public function connect(): void {
        $server = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset='.DBCHARSET;
        $this->pdo = new PDO($server, DBUSER, DBPASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function insertUser(array $post): void {
        $this->connect();
        $hashedPassword = password_hash($post['password'], PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare('INSERT INTO usuarios (usuario, password) VALUES (:usua, :pass)');
        $stmt->execute([
            ':usua' => $post['username'],
            ':pass' => $hashedPassword,
        ]);
    }
}
?>
