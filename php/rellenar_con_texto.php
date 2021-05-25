<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rellenar con Texto</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Rellenar con texto</h1>
    <?php if (!isset($_GET['texto'])) { ?>
        <form action="">
            <input type="text" placeholder="Ingrese el texto por favor" name="texto">
            <button type="submit">Enviar</button>
        </form>
    <?php } else if (!empty(trim($_GET['texto']))) { ?>
        <p>El texto que escribio es: <?= $_GET['texto'] ?></p>
        <p>Aca tenes tu texto en mayusculas: <?= strtoupper($_GET['texto']) ?> </p>
    <?php } else { ?>
        <p>Le apreto a enviar sin escribir nada :c</p>
        <p>Vuelva a escribir algo</p>
        <form action="">
            <input type="text" placeholder="Ingrese el texto por favor" name="texto">
            <button type="submit">Enviar</button>
        </form>
    <?php } ?>
</body>

</html>