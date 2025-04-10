<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    echo "Hola {$nombre}, tu correo es {$email}";
} else{
    echo "Metodo no permitido";
}

?>