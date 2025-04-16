<?php

// Primero le indicamos el contenido que le devolveremos al usuario, en este caso, decirle que devolveremos un Json
header('Content-Type: application/json');

// Simularemos una base de datos con un array. En la practica se usa una base de datos donde se guardan los datos, pero para este ejemplo lo haremos con un array
$mensajes = [
    ["id" => 1, "message" => "Hola, mundo!"],
    ["id" => 2, "message" => "Hola, PHP!"],
    ["id" => 3, "message" => "Hola, API!"],
    ["id" => 4, "message" => "Hola, cURL!"],
    ["id" => 5, "message" => "Hola, JSON!"]
];

// Verificar si se solicita un mensaje específico
if (isset($_GET['id'])) {
    // filtrar el array con array_filter para obtener el mensaje con el id solicitado, se le pasa el array con todos los datos, y una funcion anonima que recibe el dato que queremos obtener, y devuelve true o false
    $filtered = array_filter($mensajes, function($msg) {
        return $msg['id'] == $_GET['id']; // Esto devuelve true si el id del mensaje es igual al id solicitado, y false si no lo es
    });

    // Si se encuentra el mensaje, lo devolvemos como JSON, es por eso que se usa count para saber si el array filtrado tiene elementos, y si tiene elementos, se devuelve el primer elemento del array filtrado, que es el mensaje solicitado. Si no se encuentra el mensaje, se devuelve un error en formato JSON
    if (count($filtered) > 0) {
        echo json_encode(array_shift($filtered)); // array_shift elimina el primer elemento del array y lo devuelve, en este caso, el mensaje solicitado. Si no se usa array_shift, se devolvería un array con un solo elemento, en lugar de un objeto JSON.
    } else {
        http_response_code(404); // Establecemos el código de respuesta HTTP a 404 (No encontrado)
        echo json_encode(["error" => "Mensaje no encontrado"]);
    }
} else {
    // Si no se solicita un mensaje específico, devolvemos todos los mensajes como JSON
    echo json_encode($mensajes); // Esto devuelve todos los mensajes en formato JSON
}


// Para obtener un get de un dato especifico, se coloca luego de la url un ?, seguido del nombre del campo que queremos obtener, en este caso id, y el valor que queremos obtener, por ejemplo: http://localhost/consumoApi.php?id=1. Esto nos devolvera el mensaje con id 1. Si no se coloca el id, se devolveran todos los mensajes. Esto es una forma de filtrar los datos que se devuelven al usuario, para que solo reciba los datos que necesita. Esto es muy util cuando tenemos una gran cantidad de datos y solo queremos mostrar algunos de ellos.

?>