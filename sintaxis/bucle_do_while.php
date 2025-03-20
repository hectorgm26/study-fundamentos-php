<?php

# El ciclo do while es similar al while, pero la diferencia es que el do while ejecuta el código dentro del ciclo al menos una vez
# ya que evalua la condición al final del ciclo.

$i = 1;

do {

  echo "Entra {$i} en el do while <br>";
  $i++;
} while ($i < 10);


?>