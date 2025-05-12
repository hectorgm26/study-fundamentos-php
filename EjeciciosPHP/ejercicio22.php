<?php

// Esto es un array asociativo, el cual identifica cada elemento por una clave/indice
// Podemos acceder a los elementos de un array asociativo de la misma forma que lo hacemos con un array normal, pero en vez de usar un número, usamos una cadena de texto como clave/indice. ejemplo: $array["clave"] = "valor"
$frutas = array(
    "f" => "fresa",
    "m" => "manzana",
    "p" => "pera",
);

print_r($frutas);

echo $frutas["f"] . "<br>"; // fresa
echo $frutas["m"] . "<br>"; // manzana
echo $frutas["p"] . "<br>"; // pera
// Se accede a los elementos de un array asociativo de la misma forma que lo hacemos con un array normal, pero en vez de usar un número, usamos una cadena de texto como clave/indice. ejemplo: $array["clave"] = "valor"

echo "<br>";

// Podemos recorrerlo con un foreach, que es una forma más sencilla de recorrer un array asociativo. El foreach recorre cada elemento del array y nos permite acceder a la clave y al valor de cada elemento.
// Partes de un foreach: foreach($array as $clave => $valor).
// El valor es obligatorio, pero la clave no. Si no la queremos usar, podemos usar foreach($array as $valor)

foreach($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "<br>";

foreach($frutas as $clave => $fruta) {
    echo "La fruta con clave ". $clave . " es " . $fruta . "<br>";
}


?>