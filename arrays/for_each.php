<?php

# Los foreach son un tipo de bucle especializado en recorrer arrays, y se utilizan de la siguiente forma:

$names = ["Hector", "Juan", "Pepe", "Luis"];

foreach ($names as $name) {
    echo $name . "<br>";
}
# Dentro del foreach, se coloca el array a recorrer, y se asigna una variable que tomará el valor singular de cada elemento del array en cada iteración.


# Si se quiere acceder al índice de cada elemento, se puede hacer de la siguiente forma:
foreach ($names as $key => $name) {
    echo $key . " - " . $name . "<br>";
}
# En este caso, se asignan dos variables, la primera para el índice y la segunda para el valor del elemento.

# Si se quiere modificar el valor de un elemento, se debe hacer de la siguiente forma:


# Tambien funciona con arrays asociativos
$beer = [
  "name"  => "Guinness",
  "color" => "black",
  "taste" => "bitter"
];

foreach ($beer as $llave => $valor) {
  echo $llave . " - " . $valor . "<br>";
}

?>