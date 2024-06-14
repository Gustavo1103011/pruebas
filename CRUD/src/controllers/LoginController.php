<?php

namespace App\Controllers;

use App\Models\LibrosModel;

class LoginController {
    public static function list() {
        $libro = new LibrosModel();
        $listado = $libro->all();

        // Si deseas debuggear, puedes usar var_dump o die()
        // var_dump($listado);
        // die();

        return [
            'view' => 'libros/listado.php',
            'libros' => $listado // Puedes pasar los libros al archivo de vista
        ];
    }

    public static function new() {
        if($_SERVER ['REQUEST_METHOD'] == 'POST') {
            $libro = new LibrosModel();
            $libro ->insert($_POST);
            header('Location:/pruebas/CRUD/libros');
            // die();
        }

        return [
            'view' => 'libros/form.php',
            'form' => [
                'title' => 'Crear libro',
                'button' => 'Agregar',
                'action' => '/pruebas/CRUD/libros/new'
            ]
            
        ];
    }

    public static function edit() {
        $id = $_GET['id'];
        $libro = new LibrosModel();
        $actual = $libro->find($id);

        if($_SERVER ['REQUEST_METHOD'] == 'POST') {
            $libro = new LibrosModel();
            $libro ->update($_POST, $id);
            header('Location:/pruebas/CRUD/libros');
            // die();
        }
        // var_dump($actual);
        // die();
        return [
            'view' => 'libros/form.php',
            'form' => [
                'title' => 'Editar info del libro',
                'button' => 'Editar libro',
                'action' => '/pruebas/CRUD/libros/'.$id.'/edit',
                'values' => $actual
            ]
        ];
    }

    public static function delete() {
        
        $id = $_GET['id'];
        $libro = new LibrosModel();
        $libro->delete($id);
        header("Location: /pruebas/CRUD/libros");

    }
}
