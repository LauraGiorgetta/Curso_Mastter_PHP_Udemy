<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../style.css">
    <?php
    $error = '';
    $contador = 0;
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $edad = trim($_POST['edad']);
    $mail = trim($_POST['mail']);
    foreach ($_POST as $i => $dato) {
        if (!empty(trim($dato))) {
            #validar
        } else {
            $error = $error . $i . '=&';
        }
    }
    if (preg_match('/[^a-zA-Z ]/', $nombre)) {
        $error = $error . 'nombre=&';
    }
    if (preg_match('/[^a-zA-Z ]/', $apellido)) {
        $error = $error . 'apellido=&';
    }
    if (preg_match('/[\D]/', $edad)) {
        $error = $error . 'edad=&';
    }
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $error = $error . 'mail=&';
    }
    if (!empty($error)) {

        $error = rtrim($error, '&');

        header('Location:' . 'validar_formulario.php?' . $error);
    }

    ?>
</head>

<body>
    <h1>Tus Datos</h1>
    <ul>
        <?php foreach ($_POST as $dato) : ?>
            <li><?= $dato ?></li>
        <?php endforeach; ?>
    </ul>
    <button><a href="validar_formulario.php">Volver a completar</a></button>
</body>

</html>