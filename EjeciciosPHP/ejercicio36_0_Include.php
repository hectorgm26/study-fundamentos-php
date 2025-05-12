<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>
</head>
<body>

    <?php

    // Con la funcion include podemos incluir el contenido de un archivo PHP en otro archivo PHP.
    include 'ejercicio36_1_.php'; // El include siempre va con comillas simples o dobles. Puede tambien ir con parentesis
    include 'ejercicio36_1_.php';
    // Llamando dos veces al mismo archivo con include, se ejecutara el contenido del archivo dos veces.
    // PARA EVITAR ESTO, se puede usar include_once o require_once, que solo incluiran el archivo una vez, aunque se llame varias veces.

    // Si el archivo no existe, o tiene errores, se mostrara un warning de advertencia, pero el script continuara ejecutandose y se seguira ejecutando el resto del script.
    echo "<br>";
    echo "Hola, estoy en la pagina principal. <br>";

    ?>
</body>
</html>