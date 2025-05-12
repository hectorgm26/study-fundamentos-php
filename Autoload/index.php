<?php

// Es muy probable que mientras el proyecto crezca queramos organizar el proyecto en carpetas.

// Por default, siempre que queriamos utilizar las clases de otras carpetas, tendriamos que incluirlos manualmente con require o include. Pero antes poner los namespaces.

// SIN EMBARGO, A MEDIDA DE UTILIZAR MAS ARCHIVOS, NOS LLENAREMOS DE CODIGO. LA IDEA ES QUE CUANDO USEMOS EL NAMESPACE, SE IMPORTE AUTOMATICAMENTE LAS CLASES QUE NECESITAMOS
// USAREMOS UNA FUNCION QUE DETECTA CADA VEZ QUE LLAMAMOS A UNA CLASE QUE NO HA SIDO CARGADA - spl_autoload_register
// Este metodo necesita que le pasemos dentro una funcion callback, y esa funcion recibe por parametro el nombre de la clase que queremos cargar.

// Poner el autoload en el index.php, hara que se cargue automaticamente por debajo un requiere_once, de cualquier clase que se necesite, cada vez que se use una clase de cualquier namespace

use Controllers\CourseController; // LOS USE SIRVEN PARA IMPORTAR CLASES
use Models\Course;

//require_once 'Controllers/CourseController.php';
//require_once 'Models/Course.php';

spl_autoload_register(function($clase) {

    // El condicional es en caso de que la clase que queremos cargar no tenga el namespace, o que no exista el archivo. Caso contrario tendriamos que importar el archivo manualmente.
    if (file_exists(str_replace('\\', '/', $clase) . '.php')) {
            require_once str_replace('\\', '/', $clase) . '.php';
    }
    // Se usa \\ para escapar la barra invertida y para que la tome correctamente. Se remplaza la barra invertida por una barra normal en la cadena de texto almacenada en la variable $clase
});

$course = new Course(); // al instanciar la clase Course, se ejecuta automaticamente la funcion callback que le pasamos a spl_autoload_register, y se carga el archivo de la clase que instanciamos, importando el namespace, y con el require_once de dentro, se carga el archivo de la clase CourseController.php.

// con el str_replace, buscaremos traer el archivo de la clase que queremos cargar. Pero como se imprime el namespace con la barra invertida (Models\Course), no se puede cargar el archivo. Por lo que tenemos que cambiar la barra invertida por una barra normal.

// Con esta implementacion, no importa que clase querramos utilizar, ya que la funcion spl_autoload_register se encargara de importar el archivo de la clase que necesitemos, y no tendremos que preocuparnos por incluirlo manualmente. PERO PARA QUE FUNCIONE LA CLASE Y EL ARCHIVO DEBEN LLEVAR EL MISMO NOMBRE.

$course->saludar();
echo "<br>";

$courseController = new CourseController(); // Solamente con instanciar una clase, se ejecuta la funcion spl_autoload_register, y se carga el archivo.
$courseController->saludar()
?>
