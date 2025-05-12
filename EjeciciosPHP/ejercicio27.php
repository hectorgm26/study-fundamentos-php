<?php

// Metodos estaticos - Son aquellos que no necesitan instanciar la clase para ser utilizados. No se necesita crear un objeto de la clase para acceder a ellos, si no que se accede directamente a la clase. Se accede a ellos con el operador de resolucion de ambito (::).

class UnaClase {

    public static function unMetodo() {
        echo "Hola soy un metodo estatico.<br>";
    }
}

// Asi se hace normalmente, instanciando la clase y llamando al metodo desde el objeto creado. Esto no es necesario para los metodos estaticos.
// $obj = new UnaClase();
// $obj->unMetodo();

UnaClase::unMetodo();
// Se accede al metodo estatico directamente desde la clase, referenciando el nombre de la clase y el metodo con el operador de resolucion de ambito (::). Y SIN instanciar la clase, ni crear un objeto de la clase.
?>