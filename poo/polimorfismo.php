<?php
// El polimorfismo es un concepto en la POO que permite que objetos de diferentes clases sean tratados como objetos de una clase común. Esto se logra mediante la herencia y la implementación de métodos en las clases hijas, como de interfaces. Es decir, que permite que un objeto tenga distintas formas o comportamientos dependiendo del contexto en el que se utilice.

class Animal{
    protected $nombre; // protected significa que la propiedad solo puede ser accedida desde la clase misma o desde clases hijas

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function mover() {
        echo "{$this->nombre} se mueve de alguna manera<br>";
    }
}

class Pez extends Animal{

    // Si creo una funcion con el mismo nombre que la de la clase padre, estoy sobreescribiendo el metodo de la clase padre. Esto se llama polimorfismo.
    public function mover() {
        echo "{$this->nombre} nada en el agua<br>";
    }
}

class Pajaro extends Animal{

    public function mover() {
        echo "{$this->nombre} vuela en el cielo<br>";
    }
}

class Serpiente extends Animal{

    public function mover() {
        echo "{$this->nombre} se arrastra en el suelo<br>";
    }
}

$pez = new Pez("Nemo");
$pajaro = new Pajaro("Piolin");
$serpiente = new Serpiente("Kaa");

$pez->mover();
$pajaro->mover();
$serpiente->mover();

?>