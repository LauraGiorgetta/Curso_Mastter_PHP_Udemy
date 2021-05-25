<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Matriz</h1>
    <?php
    include 'includes/ejercicio_matriz_accion.php';
    include 'includes/ejercicio_matriz_aventura.php';
    include 'includes/ejercicio_matriz_deportes.php';

    $juegos = [
        'Accion' => $accion,
        'Aventura' => $aventura,
        'Deportes' => $deportes
    ];
    ?>
    <?php foreach ($juegos as $key => $tematica) { ?>
        <section>
            <h2><?= $key ?></h2>
            <ul>
                <?php foreach ($tematica as $juego) { ?>
                    <li><?= $juego ?></li>
                <?php } ?>
            </ul>
        </section>
    <?php } ?>

</body>

</html>