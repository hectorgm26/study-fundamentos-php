<?php

if ($_GET) {
    $nombre = $_GET['nombre'];
    echo "Hola $nombre";
}

// El metodo get envia los datos a traves de la URL, por lo que no es recomendable enviar datos sensibles como contraseñas o datos personales.

// El metodo get es menos seguro que el metodo post, ya que los datos enviados por get son visibles en la URL y pueden ser almacenados en el historial del navegador.

// Se identifica en la url por el signo de interrogacion ?, seguido de los datos enviados, separados por el simbolo &. Por ejemplo: ejercicio2.php?nombre=Juan&apellido=Perez
?>