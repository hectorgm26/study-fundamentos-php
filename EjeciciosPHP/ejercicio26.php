<?php

// Constructor - Es una función especial que se ejecuta al crear un objeto de la clase y se utiliza para inicializar propiedades de la clase al momento de crear el objeto e instanciar la clase.
// Siempre se ejecuta automaticamente al crear un objeto de la clase, no es necesario llamarlo.

class Persona {

    public $nombre;
    private $edad;
    protected $altura;

    public function __construct($nuevoNombre) {
        $this->nombre = $nuevoNombre; // Quiere decir que el atributo nombre de la clase Persona, sera igual al parametro $nuevoNombre que se le pase al constructor al momento de instanciar la clase.
    }

    public function asignarNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre() {
        echo "Hola soy " . $this->nombre . "<br>";
    }

    public function mostrarEdad() {

        $this->edad = 20;
        return $this->edad;
    }
}

$objTrabajador = new Trabajador("Yanira");
// $objTrabajador->asignarNombre("Yanira");
$objTrabajador->imprimirNombre();

?>