<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud de una biblioteca</title>
    <link rel="stylesheet" href="/pruebas/CRUD/assets/css/estilos.css">
</head>
<body>
    <header style="justify-content: center;">
        <h1>Biblioteca "María Morelos y Pavón"</h1>
    </header>
    <div class="card">
        <h2 class="titulo-users">Registrar usuario</h2>
        <form action="usuarios_handler.php" method="post">
            <div>
                <label style="color: white;" for="username">Ingrese nombre de usuario</label>
                <input class="inputs" type="text" id="username" name="username" required><br><br>
            </div>
            <div>
                <label style="color: white;" for="password">Ingrese contraseña</label>
                <input class="inputs" type="text" id="password" name="password" required><br><br>
            </div>
            <button class="boton-login" type="submit">Registrar</button>
            <button class="boton-cancelarUser" type="button" onclick="location.href='/pruebas/CRUD/login'">Cancelar</button>
        </form>
    </div>
</body>
</html>
