<?php

# Funciones que reciben un array y hacen una operación con él

$beers = ["Carolus", "London Porter", "Delirium Red"];


# count() - Devuelve el número de elementos de un array
echo count($beers); // 3

# print_r() - Muestra información sobre una variable de forma legible
print_r($beers); // Array ( [0] => Carolus [1] => London Porter [2] => Delirium Red )

# sort() - Ordena un array en orden ascendente
sort($beers);

# Para agregar un elemento al array, podemos hacer un $beers[] = "Baltica", o usar la función array_push()
array_push($beers, "Guinness");

# Para eliminar el último elemento de un array, podemos hacer un array_pop($beers)
array_pop($beers);

# Para eliminar el primer elemento de un array, podemos hacer un array_shift($beers)
array_shift($beers);

# Para agregar un elemento al principio de un array, podemos hacer un array_unshift($beers, "Baltica")
array_unshift($beers, "Baltica");

# array_reverse() - Devuelve un array con los elementos en orden inverso
$beers = array_reverse($beers);

# array_unique() - Elimina los valores duplicados de un array
$beers = array_unique($beers);

# array_values() - Devuelve todos los valores de un array indexado de forma numérica
$beers = array_values($beers); // [0] => Carolus [1] => London Porter [2] => Delirium Red

# in_array() - Comprueba si un valor existe en un array
if (in_array("Carolus", $beers)) {
  echo "existe";
};

# array_search() - Busca un valor en un array y devuelve su clave
echo array_search("Carolus", $beers); // 0

# array_key_exists() - Comprueba si una clave existe en un array
if (array_key_exists(0, $beers)) {
  echo "existe";
};

# array_keys() - Devuelve todas las claves de un array o un subconjunto de claves
$keys = array_keys($beers); // [0, 1, 2]

# array_merge() - Combina uno o más arrays
$beers2 = ["Baltica", "Guinness"];
$beers_mixed = array_merge($beers, $beers2);

# array_slice() - Extrae una parte de un array
$beers = array_slice($beers, 0, 2); // [Carolus, London Porter]

# array_splice() - Cambia el contenido de un array, añadiendo o eliminando elementos
array_splice($beers, 1, 0, "Delirium Red");
# aca el primer argumento es el array, el segundo es la posición donde se va a insertar, el tercero es la cantidad de elementos a eliminar, y el cuarto es el elemento a insertar



?>