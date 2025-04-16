<?php

# Validaciones de entrada = son aquellas en que debemos verificar y limpiar los datos que el usuario nos envía, para evitar inyecciones SQL, XSS, etc. y que cumplan con los datos esperados.

# Validaciones de salida = son aquellas en que debemos asegurar que los datos se muestren al usuario correctamente, formateados correctamente para evitar ataques

// Para evitar eso, debemos utilizar metodos de validacion y limpieza de datos. Existen varios tipos de filtros, los mas comunes son:

// filter_var = es una funcion de php que nos permite validar y limpiar datos. Recibe dos parametros, el dato a validar y el tipo de filtro a aplicar.
// filter_has_var = verifica si el filtro existe, es decir, si el dato a validar es correcto. Recibe dos parametros, el tipo de filtro y el nombre del campo a validar. Devuelve true o false.
// filter_input = obtiene el valor de una variable de entrada (GET, POST, COOKIE, SERVER, ENV) y aplica un filtro a la vez. Recibe tres parametros, el tipo de filtro, el nombre del campo a validar y el tipo de filtro a aplicar. Devuelve el valor filtrado o false si no existe o no es valido.

// FILTER_SANITIZE_STRING = elimina etiquetas html y caracteres especiales
// FILTER_SANITIZE_EMAIL = elimina caracteres no validos de un email
// FILTER_SANITIZE_URL = elimina caracteres no validos de una url
// FILTER_SANITIZE_NUMBER_INT = elimina caracteres no validos de un numero entero
// FILTER_SANITIZE_NUMBER_FLOAT = elimina caracteres no validos de un numero decimal
// FILTER_SANITIZE_SPECIAL_CHARS = convierte caracteres especiales en entidades html

// FILTER_VALIDATE_EMAIL = valida que el email sea correcto
// FILTER_VALIDATE_URL = valida que la url sea correcta
// FILTER_VALIDATE_INT = valida que el numero sea un entero
// FILTER_VALIDATE_FLOAT = valida que el numero sea un decimal
// FILTER_VALIDATE_BOOLEAN = valida que el valor sea un booleano
// FILTER_VALIDATE_IP = valida que la ip sea correcta
// FILTER_VALIDATE_REGEXP = valida que el valor cumpla con una expresion regular
// FILTER_VALIDATE_DOMAIN = valida que el dominio sea correcto

$email = "correo@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "El email es valido";
} else {
    echo "El email no es valido";
}


// ATAQUES XSS = Cross Site Scripting = Inyecciones de codigo js en el navegador del usuario, para robar cookies, sesiones, etc. Debemos evitar que el usuario pueda introducir codigo js en los campos de entrada, y para eso utilizamos las funciones de limpieza de datos antes de mostrarlos al usuario.
// PODEMOS PREVENIRLOS PREVIAMENTE ANALIZANDO LOS DATOS RECIBIDOS

$nombre = "<script>alert('ESTAS HACKEADO')</script>"; // En un campo nombre, el usuario introduce un codigo js que no debemos permitir
echo htmlspecialchars($nombre);
// htmlspecialchars convierte los caracteres especiales en entidades html, evitando que se ejecute el codigo js. Esto es una validacion de salida, ya que solo mostramos el contenido de lo que el usuario nos envio, nada mas


// CIFRADO Y HASHING DE CONTRASEÑAS = Debemos cifrar las contraseñas antes de guardarlas en la base de datos, para evitar que si alguien accede a la base de datos, pueda ver las contraseñas de los usuarios. Para eso utilizamos funciones de cifrado y hashing.

$contraseña = "contraseña123";
$cifrada = password_hash($contraseña, PASSWORD_BCRYPT); // Ciframos la contraseña con el algoritmo bcrypt, que es el mas seguro actualmente

echo $cifrada;
// Mostramos la contraseña cifrada, que no es posible desencriptar, solo verificar si una contraseña coincide con el hash almacenado en la base de datos



?>


