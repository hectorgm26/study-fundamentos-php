<?php

// La POO permite moldear objetos de la readliad para emular comportamientos de la vida real

class Persona {

    // Atributos o propiedades- caracteristicas del objeto o elementos de la clasw
    public $nombre;
    private $edad; // Con private solo se puede acceder desde la misma clase, por ende tiene restriccion al invocarse desde fuera de la clase
    protected $altura; // Con protected se puede acceder desde la misma clase y desde las clases heredadas, pero no desde fuera de la clase

    // Metodos - acciones que puede realizar el objeto
    public function asignarNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre() {
        echo "Hola soy " . $this->nombre . "<br>";
    }

    public function mostrarEdad() { // Este metodo es publico, por lo que se puede acceder desde fuera de la clase. Es un getter para acceder a la propiedad privada edad

        $this->edad = 20; // Asignando un valor a la propiedad edad
        return $this->edad; // Retornando el valor de la propiedad edad
    }
}

$objAlumno = new Persona("UWU"); // Instancia de la clase Persona, creando un objeto a partir de la clase
$objAlumno->asignarNombre("Hector"); // Llamando al metodo mediante el objeto y el operador de acceso (->) y el nombro de la propiedad o metodo, sin el $

echo $objAlumno->nombre; // Imprimiendo una propiedad del objeto

echo "<br>";

$objAlumno2 = new Persona("SAS");
$objAlumno2->asignarNombre("Juanito");
$objAlumno2->imprimirNombre();

echo $objAlumno2->mostrarEdad();
?>