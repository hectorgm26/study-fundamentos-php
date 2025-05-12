<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "album";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $clave);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Leer datos de la bd con una consulta SQL select
    $sql = "SELECT * FROM `fotos`";

    // Tenemos que crear una sentencia y ejecutar la instruccion utilizando PDO
    $sentencia = $conexion->prepare($sql); // el metodo prepare prepara una sentencia SQL para su ejecución. Se le pasa como parámetro la consulta SQL que se quiere ejecutar.

    $sentencia->execute(); // el metodo execute ejecuta la sentencia SQL preparada anteriormente.
    // AQUI NO SE PASA DIRECTO EL METODO EXEC, ya que no se le pasa una consulta SQL, sino una sentencia preparada, que es diferente. El metodo exec se utiliza para ejecutar una consulta SQL que no devuelve resultados, como una inserción o actualización.

    $resultado = $sentencia->fetchAll(); // el metodo fetchAll obtiene todos los resultados de la consulta SQL ejecutada. Devuelve un array con todos los resultados.

    // FORMAS DE IMPRIMIR LOS RESULTADOS

    // FORMA 1
    // print_r($resultado); // imprime el array con todos los resultados de la consulta SQL ejecutada. Se utiliza para depurar el código y ver los resultados de la consulta.

    // FORMA 2
    foreach ($resultado as $foto) {
        echo $foto['nombre']."<br>";
    }

    echo "Conexion existosa a la Base de Datos!";

} catch (PDOException $e) {
    die ("Error de conexión: " . $e->getMessage());
    exit;
}

?>