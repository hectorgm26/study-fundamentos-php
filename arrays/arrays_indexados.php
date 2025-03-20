<?php

# Colecciones de datos que permiten almacenar varios valores en una sola variable

$names = ["Hector", "Juan", "Pepe", "Luis"];

#Para acceder a los valores de un array se utiliza el índice, que parte de 0

echo $names[0]; // Hector
echo $names[1]; // Juan
# Y si se coloca una posición que no existe, se obtiene un error de índice indefinido

# Añadir un elemento al final de un array
echo $names[] = "Rosa";

?>