<?php

use Carpeta1\Humano;
// Pero si no queremos escribir el namespace completo cada vez que instanciamos la clase, podemos usar la palabra reservada "use" , seguido del nombre del namespace, luego barra invertida y el nombre de la clase
use Carpeta2\Humano as Humano2; // Si queremos invocar dos namespaces diferentes, pero que se llamen igual, podemos usar la palabra reservada "as" para renombrar una de las clases. Luego podremos instanciar la clase con el nombre que le dimos al namespace

require_once 'Carpeta1_ejercicio44/Humano.php';
require_once 'Carpeta2_ejercicio44/Humano.php';

// Cuando las clases tienen diferentes namespaces, y queremos identificar a cual de ellas nos referimos, debemos instanciar la clase con el nombre del namespace seguido de la barra invertida y el nombre de la clase, como en el siguiente ejemplo:

// $humano1 = new Carpeta1\Humano;
$humano1 = new Humano;
$humano1->saludar();

echo "<br>";

$humano2 = new Humano2;
$humano2->saludar();

?>