<?php

# El ciclo while se ejecuta mientras la condición sea verdadera. Generalmente se utiliza cuando no se sabe cuántas veces se va a repetir el ciclo.
# En la mayoria de los casos se coloca un contador para que el ciclo no sea infinito, y este se suma o resta dentro del ciclo.
# El While evalua la condición antes de ejecutar el código dentro del ciclo, es decir, puede que nunca se ejectute por no cumplir la condición.

$i = 0;

while($i < 10) {
    echo $i;
    $i++;
}

?>