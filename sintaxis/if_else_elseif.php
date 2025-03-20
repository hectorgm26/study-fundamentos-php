<?php

$edad = 61;

# Dentro del if va una instruccion booleana condicional, y si es verdadera se ejecuta el bloque de codigo que esta dentro de las llaves

# Operadores de comparacion:
# == igual
# != diferente
# < menor que
# > mayor que
# <= menor o igual que

# Operadores logicos:
# && and
# || or
# ! not


if($edad == 18){
    echo "Tienes 18 años";
} elseif($edad > 18 && $edad < 60){
    echo "Eres ya un adulto";
} elseif($edad >= 60){
    echo "Eres de la tercera edad";
} else{
    echo "Eres menor de edad";
}

# Else: ejecuta un bloqyue si la condicion del if no se cumple
# Else if: permite evaluar otras condiciones si la del if no se cumple.
# Es importante, ya que en casos con multiples condiciones, si solo se coloca else, solo se ejecutara el primer bloque que cumpla la condicion, y no se evaluaran las demas condiciones.


?>