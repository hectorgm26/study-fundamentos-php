<?php

include_once 'models/Libro.php'; // Incluimos el modelo para poder usarlo en la vista

class LibroController {

  public function index() {
    $model = new Libro(); // Instanciamos un objeto de la clase Libro, que la importamos arriba con include_once

    $libros = $model->getLibros(); // Llamamos al método getLibros del modelo

    // enviamos los datos a la vista
    include_once 'views/libro.php';
    // esto funciona mediante la inclusión de la vista libro.php, que es la que se encarga de mostrar los datos
  }
}

?>