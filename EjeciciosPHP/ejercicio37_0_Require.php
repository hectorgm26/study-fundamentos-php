<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>
</head>
<body>

    <?php

    // Con la funcion require se incluye el contenido de otro archivo PHP en el archivo actual.
    require 'ejercicio37_1_.php'; // Requiere va con comillas simples o dobles, pero no con comillas invertidas. Puede tambien ir con parentesis
    require 'ejercicio37_1_.php';
    // Llamando dos veces al mismo archivo con require, se ejecutara el contenido del archivo dos veces.
    // PARA EVITAR ESTO, se puede usar include_once o require_once, que solo incluiran el archivo una vez, aunque se llame varias veces.

    // A DIFERENCIA DE INCLUDE, Con require Si el archivo no se encuentra, se genera un error fatal y el script se detiene.

    ?>
</body>
</html>