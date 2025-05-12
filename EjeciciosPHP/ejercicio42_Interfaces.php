<?php

// Las interfaces son plantillas para crear clases, que obligan a las clases que las implementan a definir ciertos métodos y propiedades que fueron definidos en la interfaz. Por convencion se le coloca el prefijo "i" a las interfaces.

// NO SIGNIFICA QUE NO PODAMOS HACER CRECER LA CLASE CON NUEVOS METODOS. LA INTERFAZ OBLIGA A IMPLEMENTAR LOS METODOS DE LA INTERFAZ, PERO NO A QUE NO SE PUEDAN CREAR NUEVOS METODOS EN LA CLASE.

interface iTemplate {

    public function setVariable($name);
    public function getHtml();
}

class Template implements iTemplate{

    public function setVariable($name) {

    }

    public function getHtml() {

    }
}

interface a {
    public function prueba1();
}

interface b extends a {
    public function prueba2();
}

// Si queremos que interface d extienda de a y b, lo hacemos de la siguiente manera:
interface d extends a, b {
    public function prueba3();
}

// Esto porque la interfaz b hereda de a, y c implementa b, por lo tanto c tiene que implementar los métodos de a y b.
class c implements b {

    public function prueba1() {

    }

    public function prueba2() {

    }
}

class e implements d {

    public function prueba1() {

    }

    public function prueba2() {

    }

    public function prueba3() {

    }
}

?>