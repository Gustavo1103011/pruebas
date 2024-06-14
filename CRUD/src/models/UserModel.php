<?php
namespace App\Models;
use PDO;
class LibrosModel{
    private $pdo;
    private int $id;
    private String $nombre;
    private String $autor;

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getAutor(){
        return $this->autor;
    }

    private function setId($id){
        if ($id !== null) {
            $this->id = (int) $id;
        }
    }
        
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }
 
    public function connect() {
        $server = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset='.DBCHARSET;
        $this->pdo = new PDO($server, DBUSER, DBPASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /*funcion que trae todas las categorias cada una como un objeto de 
    tipo LibrosModel*/
    public function all(){
        $this->connect();
        $stmt = $this->pdo->prepare('SELECT * FROM libros');
        $stmt->execute();
        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC); // Asegúrate de obtener un array asociativo
        $retorno = [];
        foreach($datos as $d){
            $libro = new LibrosModel();
            $libro->setId($d['idlibros']); // Las claves son en minúsculas
            $libro->setNombre($d['nombre']);
            $libro->setAutor($d['autor']);
            $libro->setEditorial($d['editorial']);
            $libro->setFecha($d['fecha_p']);
            $libro->setEdicion($d['n_edicion']);
            $retorno[] = $libro;
        }
        return $retorno; // Asegúrate de devolver el array
    }

    public function find($id){
        $this->connect();
        $stmt = $this->pdo->prepare('SELECT * FROM libros WHERE idlibros = :id');
        $stmt->execute([':id' => $id]);
        $d = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($d) {
            $libro = new LibrosModel();
            $libro->setId($d['idlibros']);
            $libro->setNombre($d['nombre']);
            $libro->setAutor($d['autor']);
            $libro->setEditorial($d['editorial']);
            $libro->setFecha($d['fecha_p']);
            $libro->setEdicion($d['n_edicion']);
            return $libro;
        }
        return null;
    }
    public function insert($post) {
        $this->connect();
        $stmt = $this->pdo->prepare('INSERT INTO libros (nombre, autor, editorial, fecha_p, n_edicion) VALUES (:nom, :aut, :edit, :fec, :edi)');
        $stmt->execute([
            ':nom' => $post['nombre'],
            ':aut' => $post['autor'],
            ':edit' => $post['editorial'],
            ':fec' => $post['fecha'],
            ':edi' => $post['edicion']
        ]);
    }

    // public function update($post, $id) {
    //     $this->connect();
    //     $stmt = $this->pdo->prepare('UPDATE INTO libros (nombre, autor, editorial, fecha_p, n_edicion) VALUES (:nom, :aut, :edit, :fec, :edi) WHERE idlibros = :id');
    //     $stmt->execute([
    //         ':nom' => $post['nombre'],
    //         ':aut' => $post['autor'],
    //         ':edit' => $post['editorial'],
    //         ':fec' => $post['fecha'],
    //         ':edi' => $post['edicion']
    //     ]);
    // }

    public function update($post, $id) {
        $this->connect();
        $stmt = $this->pdo->prepare('UPDATE libros SET nombre = :nom, autor = :aut, editorial = :edit, fecha_p = :fec, n_edicion = :edi WHERE idlibros = :id');
        $stmt->execute([
            ':id' => $id,
            ':nom' => $post['nombre'],
            ':aut' => $post['autor'],
            ':edit' => $post['editorial'],
            ':fec' => $post['fecha'],
            ':edi' => $post['edicion']
        ]);
    }


    public function delete($id){
        $this->connect();
        $stmt = $this->pdo->prepare('DELETE FROM libros WHERE idlibros = :id');
        $stmt->execute([':id' => $id]);
    }
}