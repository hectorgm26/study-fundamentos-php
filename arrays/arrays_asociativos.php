<?php

# Los arrays asociativos tienen la particularidad de que para acceder a sus valores se utilizan claves/llaves en lugar de índices, que contienen un valor

$beer = [
    "name"  => "Guinness",
    "color" => "black",
    "taste" => "bitter"
];

# Para acceder a los elementos de un array asociativo se utiliza la clave
echo $beer["name"]; // Guinness
echo $beer["color"]; // black

# Para cambiar un elemento
$beer["name"] = "Heineken";
?>