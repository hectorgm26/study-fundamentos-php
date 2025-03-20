<?php

# Un array multidimensional es un array que contiene uno o más arrays dentro de él.

$beers = [

  ["name"  => "Guinness",   # Posicion 0
  "color" => "black",       # Posiciom 1                             # Sub array con índice 0
  "taste" => "bitter"       # Posicion 2
  ],

  ["name"  => "Heineken",   # Posicion 0
  "color" => "blond",       # Posicion 1                            # Sub array con índice 1
  "taste" => "bitter"       # Posiciom 2
  ],

  ["name"  => "Kilkenny",   # Posicion 0
  "color" => "red",          # Posicion 1                           # Sub array con índice 2
  "taste" => "sweet"        # Posicion 2
  ]

];


# Para acceder a sus valores, se debe indicar el índice del array dentro del array principal y el índice del valor dentro del array secundario.
# Se colocan como dos [] consecutivos, el primero para el índice del array principal y el segundo para el índice del array secundario.
echo $beers[1]["name"]; // Heineken
echo "<br>";
echo $beers[2]["color"]; // red
echo "<br>";

# LA MEJOR FORMA DE recorrer un array multidimensional es utilizando un bucle foreach anidado.
# Aca el primer bucle recorre el array principal y el segundo bucle recorre los arrays secundarios.
# El segundo bucle recorre los valores de los arrays secundarios.
foreach ($beers as $beer) {
  foreach ($beer as $key => $value) {
    echo $key . ": " . $value . "<br>";
  }
};


# Otra forma de recorrer un array multidimensional es utilizando dos bucles for anidados.
for ($i = 0; $i < count($beers); $i++) {

  // 🛠 Paso 1: Extraer las claves del subarray actual
  // En cada iteración del primer `for`, tomamos una de las cervezas, por ejemplo:
  $beer = $beers[$i];
  // Esto nos da un array asociativo como este (cuando `$i = 0`):
  // ["name" => "Guinness", "color" => "black", "taste" => "bitter"]
  //
  // Ahora queremos recorrer sus claves, así que usamos:
  $keys = array_keys($beer); # array_keys() devuelve un array con las claves de un array asociativo.

  // Esto genera un array indexado con los nombres de las claves:
  // $keys = ["name", "color", "taste"];

  for ($j = 0; $j < count($keys); $j++) {

      // 🛠 Paso 2: Recorrer las claves y usarlas para acceder a los valores
      // Ahora recorremos ese array de claves con otro `for`:
      $key = $keys[$j]; // Obtenemos "name" en la primera iteración, luego "color", luego "taste"

      // Primera vuelta (`$j = 0`)
      //    - `$key = "name"`
      //    - `echo ucfirst("name") . ": " . $beer["name"]` → **Muestra: "Name: Guinness"**
      //
      // Segunda vuelta (`$j = 1`)
      //    - `$key = "color"`
      //    - `echo ucfirst("color") . ": " . $beer["color"]` → **Muestra: "Color: black"**
      //
      // Tercera vuelta (`$j = 2`)
      //    - `$key = "taste"`
      //    - `echo ucfirst("taste") . ": " . $beer["taste"]` → **Muestra: "Taste: bitter"**

      echo ucfirst($key) . ": " . $beer[$key] . "<br>"; // Mostramos la clave y su valor

      // 🔹 ¿Qué hace `ucfirst($key)`?
      // `ucfirst()` simplemente convierte la primera letra de la cadena en mayúscula.
      // Ejemplos:
      // ucfirst("name");  // Devuelve "Name"
      // ucfirst("color"); // Devuelve "Color"
      // ucfirst("taste"); // Devuelve "Taste"
      //
      // Así evitamos mostrar algo como:
      // name: Guinness
      // color: black
      // taste: bitter
      // y en su lugar obtenemos:
      // Name: Guinness
      // Color: black
      // Taste: bitter
  }

  // 🔹 Separador visual entre cervezas para una mejor lectura
  echo "------------------<br>"; 
}


?>