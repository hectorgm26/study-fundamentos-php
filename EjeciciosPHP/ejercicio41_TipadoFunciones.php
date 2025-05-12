<?php

// SI QUEREMOS ADICIONALMENTE QUE AL CODIFICAR NOS LANCE ERRORES Y ADVERTENCIAS, PODEMOS USAR EL STRICT_TYPES
declare( strict_types = 1 ); // Esto nos obliga a que los tipos de datos sean estrictos, es decir, no se permite la coerción de tipos. Si se pasa un tipo diferente al esperado, lanzará un TypeError
// ES OPCIONAL, PODEMOS TIPAR LAS FUNCIONES SIN EL STRICT_TYPES, SOLO QUE LOS ERRORES APARECERAN EN TIEMPO DE EJECUCIÓN Y NO EN TIEMPO DE COMPILACIÓN

// PHP NO TIENE TIPADO NATIVO, pero desde PHP 7.0 se pueden usar tipos escalares y de retorno
// El tipado de funciones permite definir el tipo de datos que se espera recibir como argumento y el tipo de dato que se espera devolver
// Podemos especificar tipos escalares (int, float, string, bool) y tipos compuestos (array, object, callable, iterable). Inclusive clases e interfaces

// Basta con definir el tipo del dato antes del nombre de la variable, y el tipo de retorno después de los parametros de la función con : y luego el tipo de dato esperado para retornar

function suma(int $a, int $b): int {
    return $a + $b;
}
echo suma(5, 8);


// De esta forma los argumentos solo pueden ser de tipo string, nisiquiera tomara como valido un array que contenga strings
// Incluso el dato por defecto en caso que no se pase un argumento, debe ser del mismo tipo que el definido en la función
function saludar(string $saludo, string $nombre = "Fulanito"): string {
    return "$saludo! $nombre";
}
echo saludar("Hola Señor", "Hector");


// Podemos con el operador | definir que el argumento puede ser de uno u otro tipo, pero no de ambos a la vez
function sumarArray(array $numeros): int | float{
    $suma = 0;
    foreach($numeros as $numero) {
        $suma = $suma + $numero;
    }
    return $suma;
}
$nums = [1, 2, 3, 4, 5, 10.87];
echo sumarArray($nums);

?>