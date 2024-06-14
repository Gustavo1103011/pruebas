<?php
namespace App\Models;
use PDO;

include_once __DIR__ . '/../utils/config.php';
class UserModel{
    private $pdo;
    private int $id;
    private String $usuario;
    private String $contraseña;

    public function getId(){
        return $this->id;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getContraseña(){
        return $this->contraseña;
    }

    private function setId($id){
        if ($id !== null) {
            $this->id = (int) $id;
        }
    }
        
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setContraseña($contraseña){
        $this->contraseña = $contraseña;
    }
        
    public function connect() {
        $server = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset='.DBCHARSET;
        $this->pdo = new PDO($server, DBUSER, DBPASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function insertUser($post) {
        $this->connect();
        $stmt = $this->pdo->prepare('INSERT INTO usuarios (usuario, password) VALUES (:usua, :pass)');
        $stmt->execute([
            ':usua' => $post['username'], // Cambia a 'username'
            ':pass' => $post['password'], // Cambia a 'password'
        ]);
    }
}
