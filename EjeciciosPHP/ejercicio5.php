<?php

// CONCATENACION ES LA UNION DE ELEMENTOS

if ($_POST) {
    $txtNombre = $_POST['nombre'];
    $txtApellido = $_POST['apellido'];
    echo "Hola " . $txtNombre . " " . $txtApellido ."<br><br>";
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

    <form action="ejercicio5.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido"><br><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>