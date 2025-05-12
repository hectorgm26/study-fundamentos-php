<?php

// Abrir un archivo txt con PHP y leer o escribir su contenido

$archivo = "contenido.txt"; // Se coloca la ruta de ubicacion y el nombre del archivo a abrir

$archivoAbierto = fopen($archivo, "r"); // Con el metodo fopen se abre el archivo en modo lectura "r". Puede ser "w" para escribir o "a" para agregar contenido al final del archivo.

$contenido = fread($archivoAbierto, filesize($archivo));
// El metodo fread lee el contenido del archivo abierto. El segundo parametro es el tamaño del archivo, que se obtiene con filesize().

echo $contenido; // Se imprime el contenido del archivo

// Si se quieren escribir datos en el archivo, se puede usar el siguiente código:

// $archivo = "contenido.txt"; // Se coloca la ruta de ubicacion y el nombre del archivo a abrir
// $archivoAbierto = fopen($archivo, "w"); // Abre el archivo en modo escritura, borrando el contenido anterior
// fwrite($archivoAbierto, "Nuevo contenido"); // Escribe el nuevo contenido en el archivo
// fclose($archivoAbierto); // Cierra el archivo abierto

?>