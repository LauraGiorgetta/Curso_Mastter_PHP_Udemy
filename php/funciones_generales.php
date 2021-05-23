<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Generales</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Funciones Generales</h1>
    <?php
    # Funcion para Debuguear
    $nombre = 'Laura Giorgetta';
    var_dump($nombre);

    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------

    # Fechas -> date() -- https://www.php.net/manual/es/function.date.php
    echo '<p>' . date('d-m-Y') . '</p>';

    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------

    # Valor unico que nunca se va a repetir
    echo '<p>' . time() . '</p>';

    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------

    /** Ver tipo de dato @function gettype
     * @param {mixed}
     * @retun {string} - tipo de dato
     */
    echo gettype($nombre);

    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------

    /** Funciones para saber tipo de dato @funcion is_<tipo de dato>
     * @param {mixed}
     * @return {boolean}
     */
    if (is_string($nombre)) {
        echo '<p> $nombre es un string</p>';
    }
    if (is_float($nombre)) {
        echo '<p>$nombre es un flotante</p>';
    } else {
        echo '<p>$nombre no es un flotante</p>';
    }

    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------

    /** Ver si una variable existe @function isset
     * @param {mixed}
     * @return {boolean}
     */
    if (isset($edad)) {
        echo '<p>$edad existe</p>';
    } else {
        echo '<p>$edad no existe</p>';
    }

    if (isset($nombre)) {
        echo '<p>$nombre existe</p>';
    } else {
        echo '<p>#nombre no existe</p>';
    }

    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------

    /** Eliminar espacios por delante y por detras de un string
     * @function trim
     * @param {string}
     * @return {string} mismo string sin espacios por delante y por detras
     */
    $miString = '               Hi                   ';
    var_dump($miString);
    echo '<br>';
    var_dump(trim($miString));

    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------

    /** Eliminar variables / indices de array
     * @function unset
     * @param {mixed}
     */
    $edad = 22;
    echo $edad;
    unset($edad);
    if (isset($edad)) {
        echo '<p>$edad Existe</p>';
    } else {
        echo '<p>$edad ya no existe</p>';
    }

    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------

    /** Comprobar variable vacia
     * @function empty
     * @param {mixed}
     * @return {boolean}
     */

    $text = '';
    $nulo = null;
    $text2 = '          ';
    $falso = false;
    $num0 = 0;
    $sinDefinir;
    if (empty($text)) {
        echo '<p>$text s un String vacio</p>';
    }
    if (empty($nulo)) {
        echo '<p>$nulo esta vacio</p>';
    }
    if (empty($text2)) {
        echo '<p>$text2 es un String vacio</p>';
    } else {
        echo '<p>$text2 tiene contenido';
    }
    if (empty(trim($text2))) {
        echo '<p>$text2 es un String vacio</p>';
    } else {
        echo '<p>$text2 tiene contenido';
    }
    if (empty($falso)) {
        echo '<p>$falso esta vacio</p>';
    }
    if (empty($num0)) {
        echo '<p>$num0 esta vacio</p>';
    } else {
        echo '<p>$num0 tiene contenido';
    }
    if (empty($sinDefinir)) {
        echo '<p>$sinDefinir esta vacio</p>';
    }
    
    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------
    
    /** Contar caracteres de un string
     * @function strlen
     * @param {string}
     * @return {number} numero de caracteres
     */
    $text = '12345';
    $text2 = '             12345                 ';
    echo '<p>' . strlen($text) . '</p>';
    echo '<p>' . strlen($text2) . '</p>';
    
    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------
    
    /** Encontrar en que posicion empieza una letra/frase
     * @function strpos
     * @param {string} string que se va a analizar
     * @param {string} string a buscar
     * @return {number} posicion en la que se encuentra
     */
    $text = 'La vida es una apuesta, llena de vueltas';
    echo strpos($text, 'vida');
    
    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------

    /** Reemplazar palabras de una frase
     * @fuction str_replace
     * @param {string} palabla la cual reemplazar
     * @param {string} palabra por la cual se reemplaza
     * @param {string} sobre que variable trabajamos
     */
    echo '<p>' . str_replace('una apuesta', 'un quini 6', $text) . '</p>';

    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------
    
    /** Convertir a mayusculas y minusculas
     * Mayusculas @function strtoupper
     * Minusculas @function strtolower
     * @param {string} cadena a convertir
     * @return {string} cadena convertida a Mayusculas / Minusculas
     */
    echo '<p>' . strtoupper($text) . '</p>';
    echo '<p>' . strtolower($text) . '</p>';
    
    #-----------------------------------------------
    echo '<hr>';
    #-----------------------------------------------
    ?>
</body>

</html>