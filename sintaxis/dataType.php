<?php

# Una variable puede tener un tipo de dato, y ese dato se almacena en la variable.

$number = 1;
$decimal = 2.12;
$string = "Esto es una cadena";
$isFalse = false;

$empty = null; # null es un tipo de dato especial que representa la ausencia de valor. La variable existe, pero no tiene un valor asignado.

# Sin embargo PHP es de tipado dinámico, lo que significa que no es necesario declarar el tipo de dato de una variable, PHP lo hace por nosotros
# Y se puede cambiar el tipo de dato de una variable en cualquier momento.

# Pero podemos forzar que se repesten los tipos de datos con la declaración de tipos de datos en las funciones, o poniendo al inicio de un archivo PHP la declaración de tipos de datos
# Ejemplo: declare(strict_types=1); # Esto hará que se respeten los tipos de datos en todo el archivo PHP

# Para saber el tipo de dato de una variable, podemos usar la función gettype()
echo gettype($number); # integer
echo gettype($decimal); # double
echo gettype($string); # string
echo gettype($isFalse); # boolean
echo gettype($empty); # NULL

# Para saber si una variable es de un tipo de dato específico, podemos usar las funciones is_*
echo is_int($number); # true
echo is_float($decimal); # true
echo is_string($string); # true
echo is_bool($isFalse); # true
echo is_null($empty); # true

# Podemos castear una variable a un tipo de dato específico, para que la variable sea si o si de ese tipo de dato
$number = (int) "69"; # Ahora $number es un integer


?>