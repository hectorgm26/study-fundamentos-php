<?php

// Conectarnos a una base de datos MySQL

$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "album";

try {
    // $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
    // el metodo mysqli_connect devuelve un objeto de conexión o false si no se pudo conectar. Se le pasan como parámetros el servidor, el usuario, la clave y la base de datos a la que se quiere conectar.

    $conexion = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $clave);
    // el método PDO crea una nueva conexión a la base de datos. Se le pasan como parámetros entre comillas dobles el servidor y la base de datos a la que se quiere conectar, y como parámetros adicionales el usuario y la clave sin comillas dobles, ya que son variables.

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // el método setAttribute establece un atributo de la conexión. En este caso, se establece el modo de error a excepción, lo que significa que si ocurre un error, se lanzará una excepción. Son constantes estaticas de la clase PDO.

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg')";

    $conexion->exec($sql); // Metodo que ejecuta una sentencia SQL

    echo "Conexion existosa a la Base de Datos!";

} catch (PDOException $e) {
    die ("Error de conexión: " . $e->getMessage());
    exit;
}


?>