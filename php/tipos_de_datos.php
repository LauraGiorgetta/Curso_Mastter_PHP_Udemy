<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Datos</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Tipos de Datos</h1>
    <?php
    $array = ['Laura', 22];
    $texto = 'hi';
    $num = 24;
    $booleano = true;
    ?>
    <ul>
        <li>$array es de tipo: <?= gettype($array) ?></li>
        <li>$texto es de tipo: <?= gettype($texto) ?></li>
        <li>$num es de tipo: <?= gettype($num) ?></li>
        <li>$booleano es de tipo: <?= gettype($booleano) ?></li>
    </ul>
</body>

</html>