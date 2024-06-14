<?php 

session_start(); // Iniciar la sesión

// Verificar si el usuario está autenticado
if(isset($_SESSION['usuario'])) {
    // Usuario autenticado, continuar con el flujo normal del script

    // Incluir archivos necesarios
    include('src/utils/config.php');
    include('src/utils/autoload.php');

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $entidad = $_GET['e'] ?? 'libros';
    $entidad = ucfirst(strtolower($entidad));
    $accion = $_GET['a'] ?? 'list';

    $clase = 'App\\Controllers\\'.$entidad.'Controller';

    if(!class_exists($clase)){
        die('no existe la clase '. $clase);
    }

    if(!method_exists($clase,$accion)){
        die('no existe el metodo '.$accion.' la clase '. $clase);
    }

    $respuesta = $clase::$accion();

    $archivo = $respuesta['view'];

    include(VIEWS . '/inc/header.php');
    include(VIEWS . '/'.$archivo);
    include(VIEWS . '/inc/footer.php');
} else {
    // Si el usuario no está autenticado, redirigir al formulario de inicio de sesión
    header("Location: src/views/login.php");
    exit();
}
