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
    <div class="card-user">
        <h2 class="titulo-users">Registrar usuario</h2>
        <form action="usuarios_handler.php" method="post">
            <div>
                <label class="label-login" for="username">Ingrese nombre de usuario</label><br><br>
                <input class="input-login" type="text" id="username" name="username" required><br><br>
            </div>
            <div>
                <label class="label-login" for="password">Ingrese contraseña</label><br><br>
                <input class="input-login" type="text" id="password" name="password" required><br><br>
            </div>
            <button class="boton-login" type="submit">Registrar</button>
            <button class="boton-cancelarUser" type="button" onclick="location.href='/pruebas/CRUD/login'">Cancelar</button>
        </form>
    </div>
</body>
</html>
