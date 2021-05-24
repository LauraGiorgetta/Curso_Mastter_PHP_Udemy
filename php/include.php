<?php
include 'includes/head.php';
?>
<title>Utilizando Include en el head</title>
<style>
    ul {
        background-color: black;
        padding: 1rem;
    }
</style>
</head>

<body>
    <h1>Estamos Utilizando Include en este Head</h1>
    <p>El include trae el codigo que hicimos en la otra pagina php</p>

    <ul>
        <li><span style="color:violet">include</span> <span style="color: pink;">'archivo.php'</span>
            <span style="color: beige;">----> Agrega un archivo <span style="color: indianred;">LAS VECES QUE SEA REQUERIDAS</span> . Pero si no se encuentra el archivo el codigo que viene despues se <span style="color: indianred;">SIGUE EJECUTANDO.</span></span>
        </li>
        <li><span style="color:violet">require</span> <span style="color: pink;">'archivo.php'</span>
            <span style="color: beige;">---> Agrega un archivo <span style="color: indianred;">LAS VECES QUE SEA REQUERIDAS</span>. Pero si no se encuentra el archivo todo el codigo que viene despues <span style="color: indianred;">SE DETIENE</span></span>
        </li>
        <li><span style="color:violet">include_once</span> <span style="color: pink;">'archivo.php'</span>
            <span style="color: beige;">---> Agrega un archivo <span style="color: indianred;">SOLO UNA VEZ</span>. Pero si no se encuentra el archivo el codigo que viene despues se <span style="color: indianred;">SIGUE EJECUTANDO.</span></span>
        </li>
        <li><span style="color:violet">require_once</span> <span style="color: pink;">'archivo.php'</span>
            <span style="color: beige;">---> Agrega un archivo <span style="color: indianred;">SOLO UNA VEZ</span>. Pero si no se encuentra el archivo el codigo que viene despues se <span style="color: indianred;">SE DETIENE.</span></span>
        </li>
    </ul>
</body>

</html>