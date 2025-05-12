<?php

$edad = 32;

echo $edad . "<br>";

$edad = 40; // Sobrescribiendo la variable $edad

echo $edad . "<br>";

// Constantes - Se definen con la función define() o con la palabra reservada const (la diferencia entre define y const es que define se puede usar en cualquier parte del código y const solo se puede usar dentro de una clase o un namespace)
// Estas no se pueden modificar una vez definidas
define("NOMBRE", "Hector");
echo NOMBRE . "<br>"; // No se necesita el signo de pesos ($) para acceder a la constante



?>