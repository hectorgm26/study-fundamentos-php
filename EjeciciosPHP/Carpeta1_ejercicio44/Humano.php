<?php

// Los namespaces son una forma de encapsular clases, funciones y constantes en PHP. Permite que no cambiemos los nombres de las clases en caso de conflictos, sino que podemos usar el mismo nombre de clase en diferentes namespaces, con el fin de dividir funcionalidades en diferentes archivos y carpetas, en base a un criterio de organización, como pertenecer a un namespace específico.

namespace Carpeta1;

class Humano {

    public function saludar() {
        echo "Hola desde la clase Humano, dentro de la Carpeta1";
    }
}

?>