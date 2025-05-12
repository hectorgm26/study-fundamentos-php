<?php

// date es una función de PHP que devuelve la fecha actual en el formato especificado.
// Recibe como parámetro una cadena de texto que indica el formato deseado para la fecha (ej. "Y-m-d").
// Puede recibir un segundo parámetro opcional, que es un entero timestamp = time() que indica la fecha a formatear. Si no se pasa, se toma la fecha actual (time()).

// Los formatos se pueden ver en la documentación de PHP: https://www.php.net/manual/es/function.date.php

$hoy = date("Y-m-d");
echo "Hoy es: $hoy <br>";



?>