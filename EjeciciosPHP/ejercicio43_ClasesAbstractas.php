<?php

// las clases abstractas son clases que no pueden ser instanciadas, pero pueden ser heredadas. Solo sirven para ser extendidas por otras clases.

// Se utilizan para definir una estructura común para las clases que heredan de ella. Las clases abstractas pueden contener métodos abstractos (sin implementación) y métodos concretos (con implementación).

// Se diferencian de las interfaces en que las clases abstractas pueden contener métodos concretos y propiedades, mientras que las interfaces solo pueden contener métodos abstractos. Además, una clase puede implementar múltiples interfaces, pero solo puede heredar de una clase abstracta.

// Utiles en casos en que queremos definir una estructura común para varias clases, pero no queremos permitir que se instancien directamente. Por ejemplo, si tenemos una clase abstracta "Animal" que define un método abstracto "hacerSonido()", podemos crear clases concretas "Perro" y "Gato" que heredan de "Animal" y implementan el método "hacerSonido()" de manera diferente.

// El metodo debe ser implementado en la clase que herede de la clase abstracta si o si, pero podemos modificarlo a nuestro gusto.

abstract class ClaseAbstracta {

    // Para comportarse como una interfaz, cada propiedad o metodo debe anteponerse la palabra reservada abstract. Si no lo hacemos, la clase se comportara como una clase normal, y no como una interfaz.

    abstract protected function getValor(); // al hacerlo abstracto, no es necesario definir la logica del metodo, ya que la clase que herede de esta clase abstracta, debera definirlo. Si no lo hace, no podra ser instanciada.

    abstract public function valorPrefijo($prefijo);

    // Este metodo no es abstracto, por lo que no es necesario definirlo en la clase que herede de esta clase abstracta. Sin embargo, se podra usarlo en la clase que herede de esta clase abstracta sin problemas.
    public function imprimir() {
        echo $this->getValor();
    }
}

class ClaseConcreta extends ClaseAbstracta {

    protected function getValor() {
        return "Clase concreta";
    }

    public function valorPrefijo($prefijo, $separador = ".") {
        return $prefijo . " Clase concreta";
    }

}

$clase1 = new ClaseConcreta(); // Instanciamos la clase concreta, no la abstracta. La clase concreta hereda de la clase abstracta, por lo que tiene acceso a sus metodos y propiedades.

$clase1->imprimir();
echo $clase1->valorPrefijo("uwu");

?>