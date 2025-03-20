<?php

# El operador ternario es una forma abreviada de escribir una estructura condicional if-else

# SINTAXIS
$value = true ? 'verdadero' : 'falso';

# Explicacion = Si la condicion es verdadera, en este caso, que el valor de la variable $value es true, se asigna el valor 'verdadero' a la variable $value. 
# PERO Si la condicion es falsa, se asigna el valor 'falso' a la variable $value.

echo $value;

$edad = 18;
$esMayorDeEdad = $edad >= 18 ? 'Es mayor de edad' : 'No es mayor de edad';
echo $esMayorDeEdad;

?>