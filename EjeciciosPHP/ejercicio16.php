<?php

$numeroInicial = 0;

// La diferencia con el do while es que el while evalua la condicion antes de ejecutar el bloque de codigo, por lo que si la condicion no se cumple, el bloque de codigo no se ejecuta.

// Mientras la condicion se cumpla, el bloque de codigo se ejecutara.

// Ademas el do while asegura que el bloque de codigo se ejecute al menos una vez, ya que la condicion se evalua al final del bloque de codigo. En cambio, el while evalua la condicion al principio, y puede que incluso no se ejecute el bloque de codigo si la condicion no se cumple desde el principio.

// En este caso, el bloque de codigo se ejecutara mientras el numero inicial sea menor que 10.

while( $numeroInicial < 10) {
    echo "Numero: " . $numeroInicial . "<br>";
    $numeroInicial++;
}

?>