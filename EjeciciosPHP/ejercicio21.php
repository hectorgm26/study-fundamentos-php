<?php

// Los arrays son estructuras de datos que permiten almacenar múltiples valores en una sola variable. En PHP, los arrays pueden ser indexados (numéricos) o asociativos (clave-valor).

$frutas = array("manzana", "naranja", "plátano", "fresa", "kiwi");

print_r($frutas); // Print_r sirve para imprimir el contenido de un array de forma legible, ya que muestra la estructura del array y sus valores.

echo $frutas[0] . "<br>"; // manzana
echo $frutas[1] . "<br>"; // naranja
echo $frutas[2] . "<br>"; // plátano
echo $frutas[3] . "<br>"; // fresa
echo $frutas[4] . "<br>"; // kiwi
// Entre corchetes se indica el índice del elemento que queremos mostrar. Recuerda que los índices empiezan en 0.

echo "<br>";

// Recorrerlo con un for
// En php no funciona el length, por lo que se usa count para contar el número de elementos del array.
for($i = 0; $i < count($frutas); $i++){
    echo $frutas[$i] . "<br>";
}

// Tambien se puede recorrer con un foreach, que es una forma más sencilla de recorrer un array. Pero no se tendra acceso al índice del elemento, solo al valor. El foreach recorre cada elemento del array y nos permite acceder a su valor.
foreach($frutas as $fruta) {
    echo $fruta . "<br>";
}

?>