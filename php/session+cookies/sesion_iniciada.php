<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secion Iniciada</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <?php
    $usuario = 'Yil';
    $pass = '1234';
    if ($_GET['usuario'] == $usuario && $_GET['password'] == $pass) :
        echo '<h1>Bienvenid@ Yil</h1>';
        session_start();
        $_SESSION['usuario'] = 'Yil';
        $_SESSION['pass'] = '1234';
    ?>
        <button><a href="mostrar_datos.php">Mostrar mis datos</a></button>
        <button><a href="cambiar_datos.php">Cambiar datos</a></button>
    <?php else : ?>
        <h1>Error al iniciar sesión</h1>
        <button><a href="iniciar_sesion.php">Volver</button>

    <?php
    endif;
    if ($_GET['guardar_usuario'] == 'on') {
        setcookie('user', 'Yil');
    }
    ?>
</body>

</html>