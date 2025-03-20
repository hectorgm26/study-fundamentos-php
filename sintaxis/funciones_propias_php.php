<?php

# PHP tiene funciones propias que viene por defecto en el lenguaje

# strtolower() convierte una cadena a minúsculas
echo strtolower('HOLA MUNDO'); // hola mundo

# strtoupper() convierte una cadena a mayúsculas. Ignora los acentos
echo strtoupper('hola mundo'); // HOLA MUNDO

# mb_strtoupper() convierte una cadena a mayúsculas. No ignora los acentos
echo mb_strtoupper('hola mundo', 'UTF-8'); // HOLA MUNDO

# ucfirst() convierte a mayúscula el primer caracter de una cadena
echo ucfirst('hola mundo'); // Hola mundo

# ucwords() convierte a mayúscula el primer caracter de cada palabra en una cadena
echo ucwords('hola mundo'); // Hola Mundo

# strlen() devuelve la longitud de una cadena
echo strlen('hola mundo'); // 10

# trim() elimina los espacios en blanco al principio y al final de una cadena. Ltrim para el principio y Rtrim para el final
echo trim(' hola mundo '); // hola mundo

# substr() devuelve una parte de una cadena. El primer parámetro es la cadena, el segundo es la posición de inicio y el tercero es la longitud
echo substr('hola mundo', 0, 4); // hola

# str_replace() reemplaza en una cadena una palabra por otra.
# El primer parámetro es la palabra a buscar, el segundo es la palabra por la que se va a reemplazar y el tercero es la cadena
echo str_replace('mundo', 'amigos', 'hola mundo'); // hola amigos

# strpos() devuelve la posición de la primera ocurrencia de una palabra en una cadena
echo strpos('hola mundo', 'mundo'); // 5

# explode() divide una cadena en un array
# El primer parámetro es el separador, el segundo es la cadena
print_r(explode(' ', 'hola mundo')); // Array ( [0] => hola [1] => mundo )

# implode() une los elementos de un array en una cadena
# El primer parámetro es el separador, el segundo es el array
echo implode(' ', ['hola', 'mundo']); // hola mundo

# Longitud de un array. Para contar los elementos de un array se usa count() o sizeof() y como parámetro se pasa el array
echo count(['hola', 'mundo']); // 2
echo sizeof(['hola', 'mundo']); // 2

# Longitud de un array asociativo. Para contar los elementos de un array asociativo se usa count() o sizeof() y como parámetro se pasa el array
echo count(['saludo'    => 'hola',
            'despedida' => 'adiós']); // 2

# Generar un numero random
echo rand(1, 10); // 1 al 10

# Obtener la fecha actual
echo date('Y-m-d'); // 2021-08-10

# Obtener el timestamp actual, que es el número de segundos desde el 1 de enero de 1970 hasta la fecha actual
echo time(); // 1628582400

# Obtener la fecha actual con formato
echo date('d/m/Y H:i:s'); // 10/08/2021 10:00:00

# Funciones matemáticas

# abs() devuelve el valor absoluto de un número
echo abs(-10); // 10

# round() redondea un número
echo round(10.5); // 11

# floor() redondea un número hacia abajo
echo floor(10.9); // 10

# ceil() redondea un número hacia arriba
echo ceil(10.1); // 11

# min() devuelve el número más pequeño de una lista de números
echo min(1, 2, 3); // 1

# max() devuelve el número más grande de una lista de números
echo max(1, 2, 3); // 3

# pow() devuelve el valor de un número elevado a una potencia
echo pow(2, 3); // 8

# sqrt() devuelve la raíz cuadrada de un número
echo sqrt(9); // 3

?>