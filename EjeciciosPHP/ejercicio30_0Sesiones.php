<?php

// Sesiones y Cookies - sirven para mantener informacion entre diferentes paginas. mientras el navegador este abierto, la sesion se mantendra activa.

// Las cookies son archivos que se guardan en el navegador y tienen una fecha de caducidad.

// Las sesiones son temporales y se eliminan cuando se cierra el navegador. Las cookies son permanentes y se eliminan cuando caducan o se borran manualmente.

session_start(); // Inicia una nueva sesión o reanuda una sesión existente. Se utiliza para almacenar información del usuario entre diferentes páginas. Se debe llamar al inicio de la sesión antes de enviar cualquier salida al navegador, ya que crea un archivo de sesión en el servidor y envía una cookie al navegador del usuario.

$_SESSION['usuario']= "Hachefck";
// SE CREA UNA VARIABLE DE TIPO SESION QUE SE LLAMA USUARIO Y SE LE ASIGNA UN VALOR. SE PUEDE ACCEDER A ESTA VARIABLE DESDE CUALQUIER PAGINA DEL SITIO WEB MIENTRAS LA SESION ESTE ACTIVA. SE UTILIZA PARA ALMACENAR INFORMACION DEL USUARIO, COMO SU NOMBRE, ID, PREFERENCIAS, ETC.

$_SESSION['status'] = "Logueado"; // Podemos declarar uno o mas variables de sesion. Se pueden declarar tantas variables de sesion como se necesiten. Se pueden almacenar diferentes tipos de datos, como cadenas, arrays, objetos, etc. Las variables de sesion se almacenan en el servidor y se identifican por un ID de sesion unico que se asigna al usuario cuando inicia la sesion. Este ID se almacena en una cookie en el navegador del usuario y se utiliza para identificar la sesion en el servidor.

echo "Sesion iniciada!<br>";
echo $_SESSION['usuario']. " .Estatus: " . $_SESSION['status'] . "<br>";

?>