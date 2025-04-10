<?php

// la clase es una plantilla para la creacion de un objeto, y tienen propiedades, atributos y metodos

class Automovil{
    public $marca;
    public $modelo;
    public $color;


    function __construct($marca, $modelo, $color) // Se ejecuta siempre que se inicializa la clase
    {
        echo "Se ha creado un nuevo automovil <br>";
        $this->marca = $marca; // la propiedad marca de la clase Automovil (this) sera igual a la variable $marca que le pasemos al constructor
        $this->modelo = $modelo;
        $this->color = $color;
    }

    function mostrar(){
        echo "Marca: {$this->marca} <br>";
        echo "Modelo: {$this->modelo} <br>";
        echo "Color: {$this->color} <br>";
    }

    function arrancar() {
        echo "El automovil está en funcionamiento";
    }
}

$miAuto = new Automovil("Toyota", "Corolla", "Rojo"); // Instanciamos la clase Automovil y le pasamos los valores de las propiedades marca, modelo y color
$miAuto->mostrar();
$miAuto->arrancar();

?>