<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar datos</title>
    <link rel="stylesheet" href="../../style.css">
    <?php
    session_start();
    if (!empty($_GET)) {
        if (!empty(trim($_GET['nombre']))) {
            #no hay base de datos asi que lo guardamos en las cookies
            setcookie('nombre', $_GET['nombre']);
        }
        if (!empty(trim($_GET['nombre']))) {
            #no hay base de datos asi que lo guardamos en las cookies
            setcookie('apellido', $_GET['apellido']);
        }
        if (isset($_COOKIE['user'])) {
            setcookie('user', '', time() - 100);
        }
    }
    if (isset($_GET['guardar_usuario'])) {
        if ($_GET['guardar_usuario'] == 'on') {
            setcookie('user', 'Yil');
        }
    }

    ?>
</head>

<body>
    <h1>Cambiar datos</h1>
    <form action="">
        <label for="guardar_usuario">Guardar usuario: </label>
        <?php if (isset($_COOKIE['user'])) : ?>
            <input type="checkbox" name="guardar_usuario" checked>
        <?php else : ?>
            <input type="checkbox" name="guardar_usuario">
        <?php endif; ?>
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Apellido" name="apellido">
        <button type="submit">Guardar</button>
    </form>
    <button><a href="mostrar_datos.php">Mostrar datos</a></button>

</body>

</html>