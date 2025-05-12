<?php

// El metodo filter_has_var() permite verificar si una variable de entrada está definida y tiene un valor. Este metodo es útil para validar si se ha enviado información a través de un formulario o si una variable de entrada existe antes de intentar acceder a ella.
// Se le pasan tres argumentos: el tipo de entrada (GET, POST, COOKIE, SERVER, ENV), el nombre del campo y el filtro a aplicar (este ultimo es opcional).

/* Validar el envio por POST
if (filter_has_var(INPUT_POST, "info")) {
    echo "Informacion enviada";
} else {
    echo "No se ha enviado informacion";
}
*/


/* Validar el email - aunque primero se valida si se envia algo por post, no importa que, y si es true, se pasa a validar el email
// El metodo filter_input() permite filtrar y validar datos de entrada de forma segura y sencilla.
if (filter_has_var(INPUT_POST, "info")) {

    if (filter_input(INPUT_POST, "info", FILTER_VALIDATE_EMAIL)) {
        echo "Email valido";
    } else {
        echo "Email no valido";
    }
} else {
    echo "No se ha enviado informacion";
}
*/


// Sanear la entrada - se le pasa el filtro FILTER_SANITIZE_STRING, que elimina etiquetas HTML y PHP, y convierte caracteres especiales en entidades HTML, con el fin de evitar inyecciones de código y XSS (Cross-Site Scripting).
if (filter_has_var(INPUT_POST, "info")) {

    $email = $_POST['info'];
    // Eliminar los caracteres especiales y etiquetas HTML y PHP
    $emailLimpio = filter_var($email, FILTER_SANITIZE_EMAIL);

    echo $emailLimpio . "<br>"; // Imprime solamente los caracteres alfanumericos y los simbolos permitidos en un email, y no imprime los caracteres especiales ni etiquetas HTML y PHP.
} else {
    echo "No se ha enviado informacion";
}


// Validando un numero entero - Para validar variables se usa filter_var() y se le pasa el valor a validar y el filtro a aplicar. En este caso, se valida si es un numero entero, y si lo es, se imprime el mensaje correspondiente.
$numero = 56;

if (filter_var($numero, FILTER_VALIDATE_INT)) {
    echo $numero . " es un numero entero valido <br>";
} else {
    echo $numero . " no es un numero entero valido <br>";
}


// Saneando un numero entero
$numero2 = "5dd5gff6769uwu";
var_dump(filter_var($numero2, FILTER_SANITIZE_NUMBER_INT)); // Elimina los caracteres no numericos y devuelve el numero entero limpio.


// filter_sanitize_special_chars() - Convierte caracteres especiales en entidades HTML, como <, >, &, ", ' y /, para evitar inyecciones de código y XSS (Cross-Site Scripting).
$nombre = "<script>alert('HACKEADO')</script>";
// echo $nombre;
echo filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS);


// FILTER_INPUT_ARRAY() - Permite filtrar y validar un array de datos de entrada de forma segura y sencilla. Se le pasa el tipo de entrada (GET, POST, COOKIE, SERVER, ENV) y un array asociativo con los filtros a aplicar a cada campo. Devuelve un array con los valores filtrados y validados o false si alguno de los campos no es valido.
$filtros = array(
    "info" => FILTER_VALIDATE_EMAIL,
    "info2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    )
);

print_r(filter_input_array(INPUT_POST, $filtros)); // Devuelve un array con los valores filtrados y validados de los campos "info" e "info2". Si alguno de los campos no es valido, devuelve false.


// DIFERENTES TIPOS DE VALIDACIONES Y FILTROS
// FILTER_VALIDATE_EMAIL: Valida una dirección de correo electrónico
// FILTER_VALIDATE_URL: Valida una URL
// FILTER_VALIDATE_BOOLEAN: Valida un valor booleano (true o false)
// FILTER_VALIDATE_INT: Valida un número entero
// FILTER_VALIDATE_FLOAT: Valida un número de punto flotante
// FILTER_VALIDATE_IP: Valida una dirección IP (IPv4 o IPv6)
// FILTER_VALIDATE_REGEXP: Valida una cadena de texto utilizando una expresión regular
// FILTER_VALIDATE_DOMAIN: Valida un nombre de dominio

// DIFERENTES TIPOS DE SANITIZACION
// FILTER_SANITIZE_STRING: Elimina etiquetas HTML y PHP de una cadena de texto
// FILTER_SANITIZE_EMAIL: Elimina caracteres no válidos de una dirección de correo electrónico
// FILTER_SANITIZE_URL: Elimina caracteres no válidos de una URL
// FILTER_SANITIZE_NUMBER_INT: Elimina caracteres no válidos de un número entero
// FILTER_SANITIZE_NUMBER_FLOAT: Elimina caracteres no válidos de un número de punto flotante
// FILTER_SANITIZE_SPECIAL_CHARS: Convierte caracteres especiales en entidades HTML
// FILTER_SANITIZE_ENCODED: Decodifica una cadena de texto que ha sido codificada con base64

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="info"><br><br>
        <input type="text" name="info2">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>