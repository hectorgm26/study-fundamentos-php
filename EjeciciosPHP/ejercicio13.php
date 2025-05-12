<?php

if ($_POST) {
    $boton = $_POST['btnValor'];

    switch($boton) {
        case 1:
            echo "El usuario presiono el boton 1 <br><br>";
            break;
        case 2:
            echo "El usuario presiono el boton 2 <br><br>";
            break;
        case 3:
            echo "El usuario presiono el boton 3 <br><br>";
            break;
        default:
            echo "El usuario no presiono ningun boton <br><br>";
            break;
    }
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
    <form action="ejercicio13.php" method="POST">

    <input type="submit" name="btnValor" value="1">
    <br><br>
    <input type="submit" name="btnValor" value="2">
    <br><br>
    <input type="submit" name="btnValor" value="3">

    </form>
</body>
</html>