<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Arrays</h1>
    <ul>
        <h2>Comidas</h2>
        <?php
        # PhP puede trabajar con varias etiquetas que se abren y se cierran 
        # y se sigue ejecutando dentro de la pagina como si nunca se cerraran

        $postres = array('Torta de Chocolate', 'Cupcakes', 'Mouse de Chocolate', 'Merengue con Dulce de Leche');
        $comidas = ['Fideos con salsa blanca', 'Ensalada Caesar', 'Milanesa con Pure', 'Guiso de arroz'];
        $laura = [
            'nombre' => 'Laura Gisela',
            'apellido' => 'Giorgetta',
            'mail' => 'laura.g.giorgetta@gmail.com',
        ];

        for ($i = 0; $i < count($comidas); $i++) {
            echo '<li>' . $comidas[$i] . '</li>';
        }
        ?>
    </ul>
    <ul>
        <h2>Postres</h2>
        <?php foreach ($postres as $postre) { ?>
            <li><?= $postre ?></li>
        <?php } ?>
    </ul>
    <ol>
        <?php
        # Array asociativo bidimencional
        $alumnos = array(
            array(
                'nombre' => 'Rocio',
                'apellido' => 'Suarez',
                'materias' => 'Photoshop, Programacion web, Java',
                'antiguedad' => '2 años'
            ),
            array(
                'nombre' => 'Abboud',
                'materias' => 'Programacion Web'
            ),
            array(
                'nombre' => 'Marcelo',
                'materias' => 'JavaScript, Bootstrap'
            ),
            array(
                'nombre' => 'Peter',
                'materias' => 'JavaScript'
            )
        );
        ?>
        <?php
        #Recorremos el array asociativo bidimencional con 2 foreach y los ponemos dentro de unas listas
        foreach ($alumnos as $alumno) {
        ?>
            <li> <span style="font-size: 14pt;"><?= $alumno['nombre'] ?></span>
                <ul>
                    <?php
                    # $i es el indice o la clave y $dato es el valor
                    foreach ($alumno as $i => $dato) {
                        if ($i == 'nombre') {
                            continue;
                        }
                    ?>
                        <li><?= $i . ': ' . $dato ?></li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ol>
    <pre><?= var_dump($alumnos);
            var_dump($comidas); ?></pre>

</body>

</html>