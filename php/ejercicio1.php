<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Funciones predefinidas</h1>
    <?php
    # Funcion para Debuguear
    $nombre = 'Laura Giorgetta';
    var_dump($nombre);

    # Fechas -> date() -- https://www.php.net/manual/es/function.date.php
    echo '<p>' . date('d-m-Y') . '</p>';
    # Valor unico que nunca se va a repetir
    echo '<p>' . time() . '</p>'; 

    # Matematicas

    /**  Raiz cuadrada
     * @function sqrt
     * @param {number}
     */
    echo '<p>Raiz cuadrada de 64: ' . sqrt(64) . '</p>'; 

    /** Numero aleatorio -> @function rand
     * Opcional:
     * @param {number}
     * @param {number}
     * @return - numero aleatorio
     */
    echo '<p>Numero Aleatorio entre 20 y 50: ' . rand(20,40);

    # Numero PI
    echo '<p>PI: ' . pi() . '</p>';

    /** Redondear -> @function round
     * Requerido: @param {number}
     * Ocional: @param {number} numero de decimales (presicion)
     * @return {number} - numero redondeado segun los decimales
     */
    echo '<p>Redondear PI: ' . round(pi(), 2) . '</p>';

    ?>

</body>

</html>