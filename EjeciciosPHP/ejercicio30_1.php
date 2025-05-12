<?php

// El dato de la variable de sesión se puede leer desde otro archivo PHP, siempre y cuando se haya iniciado la sesión en ese archivo. Para ello, se utiliza la función session_start() al inicio del archivo PHP.

session_start();
// Esto permite acceder a las variables de sesión que se han creado en otros archivos PHP. Por ejemplo, si se tiene una variable de sesión llamada 'usuario', se puede acceder a ella desde otro archivo PHP utilizando $_SESSION['usuario'].

if (isset($_SESSION['usuario'])) { // isset verifica si la variable de sesión existe o no
    echo $_SESSION['usuario']. " .Estatus: " . $_SESSION['status'] . "<br>";
} else {
    echo "No hay datos. <br>";
    exit;
}
?>