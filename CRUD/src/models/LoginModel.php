<?php
namespace App\Models;

use PDO;

include_once __DIR__ . '/../utils/config.php';

class LoginModel {
    private $pdo;

    public function connect() {
        $server = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset='.DBCHARSET;
        $this->pdo = new PDO($server, DBUSER, DBPASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function findByUsername($usern) {
        $this->connect();
        $stmt = $this->pdo->prepare('SELECT * FROM usuarios WHERE usuario = :usern');
        $stmt->execute([':usern' => $usern]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $user;
    }
    
}
