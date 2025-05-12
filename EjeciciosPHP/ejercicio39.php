<?php

// Crear un archivo nuevo con php

$nombreArchivo = "nuevoArchivo.txt"; // Se coloca la ruta de ubicacion y el nombre del archivo a crear

$contenidoArchivo = "Saludos, vendisuone";

$archivoCrear = fopen($nombreArchivo, "w"); // Con el metodo fopen se abre el archivo (que todavia no existe) en modo escritura "w". Si el archivo no existe, se crea uno nuevo. Si ya existe, se borra su contenido.

fwrite($archivoCrear, $contenidoArchivo); // El metodo fwrite escribe el contenido en el archivo abierto. Se le pasan como parametros el archivo y el contenido a escribir.

fclose($archivoCrear); // Cierra el archivo abierto, para liberar recursos. Es importante cerrar el archivo después de escribir en él, para asegurarse de que todos los datos se guarden correctamente y evitar problemas de acceso al archivo en el futuro.

?>