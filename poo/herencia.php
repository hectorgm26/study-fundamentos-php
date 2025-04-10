<?php
// La herencia es un mecanismo de la programacion orientada a objetos que permite crear una nueva clase a partir de una clase existente, heredando sus propiedades y metodos. La nueva clase se llama subclase o clase hija, y la clase de la que hereda se llama superclase o clase padre. La herencia permite reutilizar el codigo y crear jerarquias de clases, permitiendo que la clase hija extienda a la padre, heredando sus metodos y atributos

class Animal {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function comer() {
        echo "{$this->nombre} está comiendo.<br>";
    }
}

class Ave extends Animal {
    public $tipoPluma;

    public function __construct($nombre, $edad, $tipoPluma) // Se deben agregar igualmente los atributos de la clase padre
    {
        parent::__construct($nombre, $edad); // Llama al constructor de la clase padre (Animal), junto a sus atributos
        $this->tipoPluma = $tipoPluma;
    }

    public function volar() {
        echo "{$this->nombre} está volando.<br>";
    }
}

$perico = new Ave("Piolin", 2, "Cortas");
$perico->comer(); // Llama al metodo de la clase padre (Animal)
$perico->volar(); // Llama al metodo propio de su clase (Ave)






?>