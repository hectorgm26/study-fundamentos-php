<?php

// Destruir variables de sesión y la sesión actual. Util en casos de logout y de vaciado de carritos

session_start(); // Primero se inicia la sesión

session_destroy(); // Luego con sesion_destroy() se destruye la sesión actual

// Una vez destruida la sesión, ya no se puede acceder a las variables de sesión desde ningun archivo, por lo que no es necesario hacer unset() para cada una de las variables de sesison. Sin embargo, si se desea eliminar las variables de sesión antes de destruir la sesión, se puede hacer con unset().

// LA UNICA FORMA DE PODER NUEVAMENTE ACCEDER A UNA SESION Y A VARIABLES DE SESION ES VOLVER A INICIAR UNA SESION CON session_start() Y CREAR NUEVAS VARIABLES DE SESION CON $_SESSION['nombre_variable'] = 'valor_variable';

echo "Se destruyo la sesión y se eliminaron las variables de sesión. <br>";

?>