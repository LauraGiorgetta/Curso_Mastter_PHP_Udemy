<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
    <link rel="stylesheet" href="../../style.css">
    <?php 
    session_start(); 
    if(isset($_GET['borrar_datos'])){
        setcookie('nombre', '', time()-100);
        setcookie('apellido', '', time()-100);
        setcookie('user', '', time()-100);
    }
    
    ?>
</head>

<body>
    <h1>Mis Datos</h1>
    <p>Usuario: <?= $_SESSION['usuario'] ?></p>
    <p>Contraseña: <?= $_SESSION['pass'] ?></p>
    <?php if(isset($_COOKIE['nombre'])) : ?>
    <p>Nombre: <?= $_COOKIE['nombre'] ?></p>
    <?php endif; ?>
    <?php if(isset($_COOKIE['apellido'])) : ?>
    <p>Apellido: <?= $_COOKIE['apellido'] ?></p>
    <?php endif; ?>
    <button><a href="cambiar_datos.php">Cambiar datos</a></button>
    <button><a href="<?= $_SERVER['PHP_SELF'] ?>?borrar_datos">Borrar todos los datos</a></button>
    <button><a href="iniciar_sesion.php">Cerrar Sesion</a></button>

</body>

</html>