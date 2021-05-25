<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postres</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Postres</h1>
    <?php
    $postres = [
        'Manzana al horno', 'Mouse de chocolate', 'Pie de limon',
        'Flan con dulce de leche', 'Torta con ganache de chocolate', 'Merengue con dulce de leche'
    ];
    ?>
    <h2>Postre Recomendado: <?= $postres[array_rand($postres)] ?></h2>
    <h3>Hay <?= count($postres) ?> comidas en total</h3>
    <form action="" method="get">
        <input type="text" placeholder="Pedí tu postre" name="pedidoPostre">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_GET['pedidoPostre'])) {
        $pedidoPostre = $_GET['pedidoPostre'];
        if (array_search($pedidoPostre, $postres) !== false) {
            echo 'Su orden sera atendia pronto';
        } else {
            echo 'Elija un postre del menu o escribalo correctamente';
        }
    }
    ?>
    <?php
    #Esta funcion recorre un array y crea Li para mostrar el contenido en el html
    function arrayLi($array)
    {
        foreach ($array as $valor) {
    ?>
            <li><?= $valor ?></li>
    <?php
        }
    }
    ?>

    <div style="display: flex;">
        <ul>
            <h3>Desordenado</h3>
            <?php arrayLi($postres) ?>
        </ul>
        <ul>
            <h3>Ordenado</h3>
            <?php
            asort($postres);
            arrayLi($postres);
            ?>
        </ul>


    </div>

</body>

</html>