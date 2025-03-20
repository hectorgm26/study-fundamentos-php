<?php

# Las funciones pueden ser llamadas en cualquier parte del código, y pueden ser nombradas en minúsculas o mayúsculas, o con guiones bajos o altos
# No distinguen si las llamas como mayusculas o minúsculas

hi("Hector");
hi("Yanira");
echo "<br>";
# Las funciones pueden tener argumentos de entrada y de salida

echo add(1, 2);
echo "<br>";
echo add(3, 4);

function hi($name) {
    echo "Hola $name!";
}

function add($a, $b) {
    $result = $a + $b;
    return $result; # Devuelve el resultado y lo podemos guardar en una variable o directamente imprimirlo
}

# Desde PHP 7 podemos definir valores por defecto en los argumentos de las funciones, y podemos definir el dato de retirno de la función
function sum(int $a, int $b): int {
    return $a + $b;
}


?>