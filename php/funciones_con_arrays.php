<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Funciones con arrays</title>
</head>

<body>
    <h1>Funciones con arrays</h1>
    <?php
    $postres = ['Mouse de chocolate', 'Ganache de chocolate', 'Merengue italiano', 'Manzana al horno'];
    $tortas = ['Bizcochuelo de chocolate', 'Torta de crema con merengue', 'Torta cubierta de ganache', 'Bizcochuelo de vainilla', 'Torta de manzana'];
    $ingredientes = ['huevos_u' => 5, 'harina_g' => 500, 'leche_ml' => 500, 'manteca_g' => 250];
    # Ordena alfabeticamente ASC
    asort($postres);
    # Ordena alfabeticamente DESC
    arsort($tortas);

    # Ordena numerica o alfatebicamente ASC, pero le saca el array asociativo
    echo '<pre>';
    echo var_dump($ingredientes);
    echo '</pre>';
    sort($ingredientes);

    # Agregar elementos al array
    $postres[] = 'Pie de Limon';
    array_push($postres, 'Flan con dulce de leche');

    # Elimina el ultimo elemento del array
    array_pop($tortas);

    # Elimina un indice del array
    unset($tortas[0]);

    # Saca un indice RANDOM de un array
    $index = array_rand($tortas);

    # Da vuelta un array
    $numeros = [1,2,3,4,5,6];
    $numeros = array_reverse($numeros);

    # Busca un valor en el array, tiene que estar todas las palabras, Keysentive, devuelve true o false
    $busqueda = array_search('Ganache de chocolate', $postres);
    echo '<h2>' . $busqueda . '</h2>';

    # Cuenta la cantidad de elementos
    echo count($numeros);
    echo '<br>';
    echo sizeof($numeros);

    ?>
    <pre><?= var_dump($postres) . var_dump($tortas) . var_dump($ingredientes) . var_dump($numeros) ?></pre>
    <h2>Menu del día: <?= $tortas[$index] ?></h2>

</body>

</html>