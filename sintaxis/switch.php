<?php

# Switch es una estructura de control que permite evaluar una variable y compararla con diferentes valores, y ejecutar un bloque de codigo dependiendo del valor de la variable.

# En el valor del case, se coloca el valor con el que se va a comparar la variable, y si coincide, se ejecuta el bloque de codigo que esta dentro de las llaves.
# El break es para que en caso de que se cumpla la condicion, no se sigan evaluando los demas cases.
# Default es para que si no se cumple ninguna de las condiciones, se ejecute un bloque de codigo por defecto.

$mes = 5;

switch($mes){
  case 1:
    echo "Es Enero";
    break;
  case 2:
    echo "Es Febrero";
    break;
  case 3:
    echo "Es Marzo";
    break;
  case 4:
    echo "Es Abril";
    break;
  default:
    echo "No es ningun mes";
    break;
}

# Otra forma de hacer el switch es con rangos de valores, como en el siguiente ejemplo:
switch($mes){
  case 1:
  case 2:
  case 12:
    echo "Es Invierno";
    break;
  case 3:
  case 4:
  case 5:
    echo "Es Primavera";
    break;
  case 6:
  case 7:
  case 8:
    echo "Es Verano";
    break;
  case 9:
  case 10:
  case 11:
    echo "Es Otoño";
    break;
  default:
    echo "No es ningun mes";
    break;
}


?>