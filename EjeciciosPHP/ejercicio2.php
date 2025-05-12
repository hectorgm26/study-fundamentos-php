<?php

if ($_POST) { // Verifica si se ha enviado alguna información por POST, devuelve true si se ha enviado algo, false si no
    $nombre = $_POST['nombre'];
    echo "Hola $nombre, bienvenido a PHP";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio2.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>