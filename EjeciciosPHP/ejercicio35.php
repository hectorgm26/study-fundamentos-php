<?php

// api: developer.dailymotion.con

$url = "https://jsonplaceholder.typicode.com/posts";

// Un url con https necesita opciones adicionales de seguridad
$opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false)); // Esto es para evitar errores de seguridad, no es recomendable en producción

// el metodo file_get_contents() permite obtener el contenido de un archivo o url y devolverlo como una cadena de texto
// Se le pasan como parametros: la url, un booleano que indica si se debe usar el contexto de la url, y el contexto de la url
// El contexto de la url se crea con la funcion stream_context_create() que recibe un array con las opciones de seguridad
$respuesta = file_get_contents($url, false, stream_context_create($opciones));

$objRespuesta = json_decode($respuesta, true); // Se decodifica la respuesta en formato JSON a un array asociativo

// print_r($objRespuesta);

/*
foreach($objRespuesta as $registro) {
    // print_r($registro); // Muestra el registro completo para ver su estructura y encontrar las claves necesarias para acceder a los datos
    echo $registro['id'] . "<br>";
    echo $registro['title'] . "<br>";
    echo $registro['body'] . "<br>";
    echo "<br>";
}

*/

// Convertiremos el array a una lista html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($objRespuesta as $registro): ?>
        <li><?php echo "ID: " .$registro['id']; ?> </li>
        <li><?php echo "Titulo: " .$registro['title']; ?> </li>
        <li><?php echo "Cuerpo: " .$registro['body']; ?> </li>
        <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>