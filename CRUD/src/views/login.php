<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de una biblioteca</title>
    <link rel="stylesheet" href="/pruebas/CRUD/assets/css/estilos.css">
</head>
<body>
    <header class="header1">
        <h1>Biblioteca "María Morelos y Pavón"</h1>
    </header>
    <main>
        <div class="card-login">
            <h2 class="titulo-login">Login</h2>
            <!-- Mostrar mensaje de error si existe -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <p style="color: red;">Usuario o contraseña incorrecta</p>
            <?php endif; ?>
            <form action="login_handler.php" method="post">
                <div>
                    <label class="label-login" for="username">Username:</label>
                    <input class="input-login" type="text" id="username" name="username" required><br><br>
                </div>
                <div>
                    <label class="label-login" for="password">Password:</label>
                    <input class="input-login" type="password" id="password" name="password" required><br><br>
                </div>
                <button class="boton-login" type="submit">Ingresar</button><br><br>
                <a class="boton-registro" href="/pruebas/CRUD/src/views/usuarios.php" >Registrarse</a>
            </form>
        </div>
    </main>      
</body>
</html>
