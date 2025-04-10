<?php
// Los traits en php son un mecanismo para reutilizar codigo en clases. Permiten incluir métodos y propiedades en una clase sin necesidad de heredar de otra clase. Esto es útil para evitar la herencia múltiple y para compartir funcionalidades entre diferentes clases.

// Un trait se define con la palabra clave "trait" y puede contener métodos y propiedades. Luego, se puede usar el trait en una clase utilizando la palabra clave "use".

// UN TRAIT ES SIMILAR A UNA CLASE, PERO ESTA DISEÑADO PARA AGRUPAR FUNCIONALIDADES de manera horizontal, es decir, permite definir metodos y propiedades que pueden utilizar distintas clases para evitar la duplicacion de codigo, sin utilizar herencia, repitiendo el mismo codigo en distintas clases.

// Facilita la separacion de responsabilidades, permitiendo que una clase utilice metodos y propiedades de varios traits. Esto es especialmente util en lenguajes que no soportan herencia multiple, como PHP.

// El treit tendra funciones, metodos y propiedades, y cuando la clase utilice el trait, podra utilizar los metodos y propiedades del trait como si fueran propios de la clase.

// Son diferentes a las interfaces, ya que las interfaces solo definen la firma de los metodos, pero no su implementacion. En cambio, los traits pueden contener implementaciones completas de metodos, e inclusive pueden tener propiedades.

trait Logger{

    public function log($message){
        echo date('Y-m-d H:i:s') . " : {$message}<br>";
    }
}

class Libro{
    use Logger; // Utiliza el trait Logger, una vez que hacemos eso, podemos utilizar los metodos del trait como si fueran propios de la clase.

    public function crear($titulo) {
        $this->log("Libro creado: {$titulo}");
    }
}

class Usuario{
    use Logger;

    public function crear($titulo) {
        $this->log("Usuario creado: {$titulo}");
    }
}

$libro = new Libro();
$libro->crear("Harry Potter y la piedra filosofal");

?>