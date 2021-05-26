<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../../style.css">
    <?php
        session_start();
        session_destroy();
    ?>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <p>Usuario: Yil</p>
    <p>Pass: 1234</p>
    <form action="sesion_iniciada.php">
        <?php if(isset($_COOKIE['user'])) :?>     
        <input type="text" value="<?= $_COOKIE['user'] ?>" placeholder="Usuario" name="usuario">
        <?php else : ?>
        <input type="text" placeholder="Usuario" name="usuario">
        <?php endif; ?>
        <input type="text" placeholder="Contraseña" name="password">
        <button type="submit">Iniciar</button>
        <p>Desea guardar el nombre de usuario?</p>
        <label for="guardar_usuario">Si</label>
        <input type="checkbox" name="guardar_usuario">
    </form>
    
</body>
</html>