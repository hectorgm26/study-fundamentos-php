<?php

// Para trabajar con archivos en PHP, se utiliza la superglobal $_FILES, que es un array asociativo que contiene información sobre los archivos subidos a través de un formulario HTML. y no $_POST, ya que $_POST solo se utiliza para enviar datos de formularios, no archivos.

if ($_POST) {
    print_r($_POST);

    print_r($_FILES['archivo']); // Muestra la información del archivo subido, accediento al nombre del input

    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']); // Mueve el archivo subido a la carpeta actual. Recibe dos parámetros: el primero es la ruta temporal del archivo subido y el segundo es la ruta donde se quiere mover el archivo. En este caso, se mueve a la carpeta actual con el nombre original del archivo.

    // Si quisieramos especificar una carpeta diferente, podríamos hacerlo así:
    // move_uploaded_file($_FILES['archivo']['tmp_name'], 'carpeta/' . $_FILES['archivo']['name']); // Mueve el archivo subido a la carpeta "carpeta" con el nombre original del archivo. En la carpeta se coloca la ruta completa, y se concatenan el nombre de la carpeta y el nombre del archivo con un punto (.) para unir cadenas. Si la carpeta no existe, se debe crear previamente o se generará un error.
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
    <form action="ejercicio32.php" method="post" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" es necesario para enviar archivos -->

        <label for="archivo">Imagen</label><br>
        <input type="file" name="archivo"><br><br> <!-- Para subir un archivo sea cualquiera su tipo y extension, y no se le puede poner un valor predefinido-->
        <input type="submit" name="enviar" value="Enviar Informacion">
    </form>
</body>
</html>