<?php

// Leer formatos json que nos envian las apis y consumirlas
// No podemos leerlos directamente, asi que tenemos que convertirlos a un array asociativo de PHP y asi sacar la informacion que nos interesa y poder leerla y trabajarla

// json_decode() convierte un JSON a un array asociativo de PHP

$jsonContenido = '[
    {"nombre": "Hector", "apellido": "Gonzalez"},
    {"nombre": "Juan", "apellido": "Lopez"},
    {"nombre": "Maria", "apellido": "Gonzalez"},
    {"nombre": "Pedro", "apellido": "Lopez"}
]';

$resultado = json_decode($jsonContenido, true); // true para convertir a array asociativo
print_r($resultado); // Imprimimos el resultado para ver que nos devuelve
echo "<br>";
echo "<br>";

foreach($resultado as $persona) {

    print_r($persona); // RECOMENDABLE PARA DEBUGUEAR Y TENER UNA IDEA DE LO QUE HAY DENTRO DEL ARRAY
    echo "<br>";

    echo "Nombre: " . $persona['nombre'] . "<br>";
    echo "Apellido: " . $persona['apellido'] . "<br>";
    echo "<br>";
}


?>