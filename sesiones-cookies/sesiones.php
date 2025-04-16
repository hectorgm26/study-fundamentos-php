<?php

// Las cookies son una forma de almacenar datos en el navegador del usuario. Se utilizan para recordar información entre sesiones, como preferencias de usuario, autenticación y seguimiento de actividad.
// Son pequeños archivos de texto para recordar informacion del usuario y su interaccion con el sitio web, que se guardan en el navegador. Tienen un tiempo de vida definido y se envian al servidor con cada peticion. Se pueden usar para autenticar usuarios, recordar preferencias, rastrear actividad, entre otros.

//Las cookies son limitadas en tamaño y pueden ser bloqueadas por el usuario o el navegador. Se pueden crear, leer y eliminar mediante funciones de PHP como setcookie(), $_COOKIE y setcookie().

setcookie("usuario", "Juan", time()+5, "/"); // Crea una cookie llamada "usuario" con el valor "Juan", que expira en 5 segundos y es accesible en todo el dominio ("/").

if(isset($_COOKIE["usuario"])) {
    echo "Hola" . $_COOKIE["usuario"];
    // Si la cookie "usuario" está establecida y se accede antes de que expire, se muestra un saludo con el nombre del usuario
} else {
    echo "Hola desconocido";
}


// Crear sesion
session_start(); // Inicia una nueva sesión o reanuda la sesión existente.

$_SESSION["usuario"] = ["Hector"];

echo "Hola" . $_SESSION["usuario"];

?>