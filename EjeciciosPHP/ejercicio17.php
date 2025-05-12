<?php

// Las funciones son bloques de código que se pueden reutilizar en el programa.

function imprimirNombre($nombre, $apellido="") { // Si a un argumento le asignamos un valor por defecto, no es necesario pasarlo al llamar a la función. En este caso, si no se pasa el apellido, se asigna un string vacío.

    // Rutinas o instrucciones
    echo "Hola " . $nombre . " " . $apellido. "<br>";
}

$nombre = "Hector";
$apellido = "Gonzalez";

imprimirNombre($nombre, $apellido); // Llamada a la función

imprimirNombre("Juan", "Gonzalez"); // Llamada a la función pasandole directamente el nombre, sin usar una variable

imprimirNombre("Yanira"); // Llamada a la función pasandole solo el nombre, sin usar una variable. En este caso, el apellido se asigna como un string vacío.

?>