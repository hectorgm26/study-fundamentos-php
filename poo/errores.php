<?php
// Tecnica de control de errores en tiempo de ejecucion, usando excepciones

// Las excepciones son objetos que representan un error y una condicion inusual en el flujo normal de un programa

// Las excepciones son lanzadas (throw) y capturadas (catch) para manejar errores de manera controlada
// Las excepciones pueden ser lanzadas por el propio programa o por el sistema

// De esta forma podemos evitar que el programa termine abruptamente

function registrarUsuarios($edad, $nombre){
    if($edad < 18) {
        throw new Exception("REGISTRO FALLIDO: El usuario debe ser mayor de 18 años.");
    } else {
        echo "Usuario {$nombre} registrado exitosamente.<br>";
    }
}

// Podemos usar un try-catch para manejar la excepcion lanzada de forma controlada, es decir, que no se detenga el flujo del programa
// Dentro del bloque try se ejecuta el código que podria hipoteticamente lanzar una excepcion
// Y dentro del catch se coloca el código que se ejecuta si es que se lanza una excepcion, y en parentesis se coloca el tipo de excepcion que se espera

try {
    registrarUsuarios(16, "Pedro Sanchez");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
?>