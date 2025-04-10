<?php
// Todas las lineas de codigo deben terminar con punto y coma, y se debe escribir el codigo dentro de las etiquetas <?php

// Variables y tipos de datos
$string = "Hector";
$entero = 10;
$decimal = 10.5;
$booleano = true;
$frutas = array("manzana", "platano", "pera");
// $persona = new Persona(); // objeto
$direccion = null; // null es un tipo de dato especial que indica que la variable no tiene valor, ES DECIR, ESTA VACIO

// Ver contenido de la variable en el navegador
echo $string;

// Operadores
// aritmeticos + - * / %
$suma = 5 + 8;
$resta = 5 - 8;
$multiplicacion = 5 * 8;
$division = 5 / 8;
$modulo = 5 % 8; // residuo de la division, es decir, lo que sobra de la division

// de asignacion =, +=, -=, *=, /=, %=
$asignacion = 5;
$asignacion += 6; // suma 6 a la variable $asignacion

// de comparacion ==, ===, !=, !==, <, >, <=, >=
$edad = 12;
$resultado = $edad > 18;
echo $resultado; // Los valores falsos no se imprimen en el navegador, es decir, no se ve nada. Solo se imprime si es verdadero, y se ven como 1
echo "<br>";
// salto de linea en HTML para que en el navegador se vea mejor, o bien se puede concatenar con el string mediante un punto . o "{$resultado}<br>", o con "\n" para que se vea en la consola de PHP;

// logicos &&, ||, !
$tieneCarnet = true;
echo ($edad > 18 || $tieneCarnet);
echo "<br>";

// ESTRUCTURAS DE CONTROL
// if, else, switch, while, for, foreach

$edad = 18;
if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}
echo "<br>";

// iterativas
$frutas = array("manzana", "platano", "pera", "naranja", "uva", "sandia", "melon", "kiwi", "fresa", "cereza");

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

// Manipulacion de cadenas
$cadena = "Hola, mundo en PHP";

// Longitud de la cadena - strlen()
echo strlen($cadena) . "<br>"; // devuelve la longitud de la cadena, es decir, el numero de caracteres que tiene

// Convertir a mayusculas - strtoupper()
echo strtoupper($cadena) . "<br>"; // convierte la cadena a mayusculas

// Convertir a minusculas - strtolower()
echo strtolower($cadena) . "<br>"; // convierte la cadena a minusculas

// Remplazar partes de una cadena por otra cadena - str_replace(). El primer parametro es la palabra a buscar, el segundo es la palabra a reemplazar y el tercero es la cadena donde se va a buscar y reemplazar
echo str_replace("PHP", "JavaScript", $cadena) . "<br>";

// Dividir cadena en un array - explode()
$partes = explode(",", $cadena); // divide la cadena en partes, el primer parametro es el separador y el segundo es la cadena a dividir
foreach ($partes as $parte) {
    echo $parte . "<br>";
}

// Unir elementos de un array en una cadena - implode()
$nuevaCadena = implode("-", $partes); // une los elementos del array en una cadena, el primer parametro es el separador y el segundo es el array a unir
echo $nuevaCadena . "<br>";

// Arrays indexados - se acceden mediante su indice numerico. El conteo se empieza de 0
$frutas = array("manzana", "platano", "pera", "naranja", "uva", "sandia", "melon", "kiwi", "fresa", "cereza");
echo $frutas[1] . "<br>";


// Arrays asociativos - se acceden mediante su clave, es decir, el nombre de la variable
$persona = array(
    "nombre" => "Hector Gonzalez",
    "edad" => 27,
    "correo" => "correo@correo.com"
);

echo $persona["nombre"] . "<br>"; // accede al elemento con la clave "nombre" del array asociativo

// Agregar nueva clave
$persona["telefono"] = "123456789";

// Funciones para trabajar con arreglos
$frutas = array("manzana", "platano", "pera", "naranja", "uva", "sandia", "melon", "kiwi", "fresa", "cereza");

// contar el numero de elementos del array - count()
echo count($frutas) . "<br>";

// ordenar el array - sort()
sort($frutas); // ordena el array de forma ascendente
// rsort($frutas); // ordena el array de forma descendente

// Verificar si un valor existe en el array - in_array() - devuelve true o false - El primer argumento es el valor a buscar y el segundo es el array donde se va a buscar
echo in_array("manzana", $frutas);

// agregar un elemento al array - array_push()
array_push($frutas, "mora"); // agrega un elemento al final del array
$frutas[] = "mora"; // otra forma de agregar un elemento al final del array

// eliminar un elemento del array - unset()
unset($frutas[1]); // elimina el elemento en la posicion 1 del array, es decir, el segundo elemento

// eliminar el ultimo elemento del array - array_pop()
array_pop($frutas); // elimina el ultimo elemento del array

// eliminar el primer elemento del array - array_shift()
array_shift($frutas); // elimina el primer elemento del array

// agregar un elemento al inicio del array - array_unshift()
array_unshift($frutas, "mora"); // agrega un elemento al inicio del array



?>