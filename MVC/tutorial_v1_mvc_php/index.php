<?php

include_once 'controllers/LibroController.php'; // Incluimos el controlador para poder usarlo en la vista

$controller = new LibroController(); // Instanciamos un objeto de la clase LibroController

$controller->index(); // Llamamos al método index del controlador


?>