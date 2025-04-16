<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    echo "Hola {$nombre}, tu correo es {$email}";
} else{
    echo "Metodo no permitido";
}

// Validar que la informacion del metodo post efectivamente haya llegado, y si no, mostrar un mensaje de que no se recibio x informacion

// if (isset($_POST['nombre']) && isset($_POST['email'])) {
//     $nombre = $_POST['nombre'];
//     $email = $_POST['email'];
//     echo "Hola {$nombre}, tu correo es {$email}";
// } else {
//     echo "No se recibieron los datos necesarios";

// Y SI SE QUIERE ESPECIFICAR CUAL DATO NO SE RECIBIO

//     if (!isset($_POST['nombre'])) {
//         echo "No se recibio el nombre";
//     } else {
//         $nombre = $_POST['nombre'];
//     }
//     if (!isset($_POST['email'])) {
//         echo "No se recibio el email";
//     } else {
//         $email = $_POST['email'];
//     }
//     echo "Hola {$nombre}, tu correo es {$email}";

// Tambien se puede utilizar empty para validar si el campo esta vacio o no
//     if (empty($_POST['nombre'])) {
//         echo "No se recibio el nombre";
//     } else {
//         $nombre = $_POST['nombre'];
//     }

// DIFERENCIA ENTRE ISSET Y EMPTY
//     // isset: verifica si la variable existe y no es null
//     // empty: verifica si la variable existe y no es vacia (0, "", null, false, array(), etc.)
// ENTONCES, LA GRAN DIFERENCIA ES QUE ISSET NO VERIFICA SI LA VARIABLE ES VACIA, SOLO VERIFICA SI EXISTE Y NO ES NULL, MIENTRAS QUE EMPTY VERIFICA SI EXISTE Y NO ES VACIA.

?>