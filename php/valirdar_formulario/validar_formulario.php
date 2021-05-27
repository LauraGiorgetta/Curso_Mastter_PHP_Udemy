<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../style.css">
    <style>
        p {
            color: brown;
            font-size: 14pt;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Validar Formulario</h1>
    <?php if (isset($_GET['nombre'])) : ?>
        <p>Nombre Incorrecto</p>
    <?php endif; ?>
    <?php if (isset($_GET['apellido'])) : ?>
        <p>Apellido Incorrecto</p>
    <?php endif; ?>
    <?php if (isset($_GET['edad'])) : ?>
        <p>Edad Incorrecta</p>
    <?php endif; ?>
    <?php if (isset($_GET['mail'])) : ?>
        <p>Mail Incorrecto</p>
    <?php endif; ?>
    <form action="procesar_formulario.php" method="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Apellido" name="apellido">
        <input type="text" placeholder="Edad" name="edad">
        <input type="text" placeholder="Mail" name="mail">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>