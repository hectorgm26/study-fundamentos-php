<?php

#Variables pueden empexzar con letras o guion bajo, jumto al simbolo de dolar
# Los true y false se guardan como 1 y 0 respectivamente

$a = 1;
$A = 2;

echo $a . " ";
echo $A;

# Echo permite imprimir en consola o en la pagina web
# La concatenacion se hace con un punto, o con una coma dentro de echo

$edad = 30;;
$nombre = "Hector";
echo "Mi nombre es $nombre y tengo $edad años";

#Saltos de linea
echo "\n"; # Salto de linea PARA CONSOLA
echo "<br>"; # Salto de linea PARA PAGINA WEB

# Otras formas de concatenar:
# 1. con {}
echo "Mi nombre es {$nombre} y tengo {$edad} años";
# 2. con sprintf()
echo sprintf("Mi nombre es %s y tengo %d años", $nombre, $edad);

?>