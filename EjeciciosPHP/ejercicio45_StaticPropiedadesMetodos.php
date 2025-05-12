<?php

// Los metodos y propiedades estáticas se pueden invocar sin instanciar la clase.
// LAS PROPIEDADES Y METODOS ESTATICOS LE PERTENECEN A LA CLASE Y NO A LA INSTANCIA.

// LA PALABRA THIS SE UTILIZA PARA HACER REFERENCIA A LA PROPIEDAD DEL OBJETO INSTANCIADO, NO A LA CLASE.
// Y CUANDO SE DECLARA ALGO ESTATICO, ESTA PROPIEDAD NO SE LE PASA AL OBJETO. ESA PROPIEDAD SIGUE EXISTIENDO PERO SOLO EN LA CLASE.

// En php podemos declarar funciones que no utilicen propiedades o metodos de la misma, por tanto es probable que queramos usar la clase sin instanciarla.

class Humano {

    public static $nombre = "Hector Gonzalez";

    public static function saludar() {
        echo "Hola Mundo";
    }

    public function saludoPersonalizado($nombre) {
        echo "Hola " . self::$nombre; // Para hace referencia a la propiedad estatica se usa self:: en vez de $this (self se refiere a la clase propia que estamos utilizando)

        // Normlamente se usaria el echo "Hola " . $this->nombre; ya que $this hace referencia a la instancia de la clase
        // pero como el nombre es estatico, no se puede acceder por parte del objeto instanciado
    }
}

class Chileno extends Humano{

    // si queremos acceder al valor de la propiedad estatica de la clase padre, se usa el operador :: y el nombre de la propiedad
    // SE USA EL metodo parent:: para acceder a la propiedad o metodo de la clase padre

    public function saludoChileno() {
        echo "Saludo desde Chile, soy " . parent::$nombre;
    }
}

// Generalmente para acceder a propiedades o metodos se instancia la clase
//$humano = new Humano();
//$humano ->saludar();

// USANDO EL METODO ESTATICO
Humano::saludar();
// SI SE DECLARA EL METODO COMO STATICO,  SE DEBE REFERENCIAR A LA CLASE Y LUEGO CON EL OPERADOR :: ESCRIBIR EL NOMBRE DEL METODO
echo "<br>";
echo Humano::$nombre; // ACCEDIENDO A LA PROPIEDAD ESTATICA SIN INSTANCIAR LA CLASE
echo "<br>";

$humano = new Humano();
$humano->saludoPersonalizado("Hector"); // ACCEDIENDO A UN METODO NO ESTATICO
echo "<br>";


$chileno = new Chileno();
$chileno->saludoChileno();

?>