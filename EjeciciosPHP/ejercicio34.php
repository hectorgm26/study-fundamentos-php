<?php

// Procedimiento inverso de json_decode = json_encode
// Transforma un array asociativo en un objeto JSON, con el fin de intercambiar informacion entre distintos lenguajes de programacion y aplicaciones

$personas = array(
    "Oscar" => 40,
    "Jose" => 30,
    "Maria" => 25
);

// Convertir el array asociativo a un objeto JSON - metodo json_encode
echo json_encode($personas);



?>