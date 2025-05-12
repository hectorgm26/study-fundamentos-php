<?php

// Herencia en POO - Consiste en crear una nueva clase a partir de una clase ya existente, heredando sus propiedades y métodos.

class Persona {

    public $nombre;
    private $edad;
    protected $altura;

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

class Trabajador extends Persona{

    public $puesto;

    public function presentarseComoTrabajador() {
        echo "Hola soy " . $this->nombre . " y soy " . $this->puesto . "<br>";
    }


}

$objTrabajador = new Trabajador();
$objTrabajador->asignarNombre("Yanira");

$objTrabajador->puesto = "Auditora";
$objTrabajador->presentarseComoTrabajador();

?>