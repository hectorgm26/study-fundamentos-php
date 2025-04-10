<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "ejemplo_db";

$conn = new mysqli($serverName, $userName, $password, $databaseName);

if ($conn->connect_error){
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos.<br>";

// Una inyeccion de SQL es un ataque informático que permite a un atacante ejecutar consultas SQL maliciosas en una base de datos, aprovechando vulnerabilidades en la aplicación web. Esto puede llevar a la divulgación de datos sensibles, modificación o eliminación de datos, y en algunos casos, incluso el control total del servidor de la base de datos.

// La prevencion de inyeccion de SQL se puede hacer de varias maneras, pero la más común y recomendada es usar consultas preparadas (prepared statements) con parámetros vinculados (bound parameters).

// EJEMPLO
// $sql = "SELECT * FROM usuarios WHERE nombre = 'Juan Perez'"; DEVUELVE TRUE SI EXISTE UN REGISTRO CON ESE NOMBRE, si no devuelve FALSE
// $sql = "SELECT * FROM usuarios WHERE nombre = '' OR '1'='1'"; ATAQUE DE INYECCION SQL

// En este caso, la consulta SQL es vulnerable a inyecciones de SQL, ya que el valor de 'nombre' se inserta directamente en la consulta sin ninguna validación o escape.
// Un atacante podría inyectar código SQL malicioso en el valor de 'nombre', agregando por ejemplo: WHERE nombre = '' OR '1'='1'"; esto devolvera TRUE, y el atacante obtendría acceso a todos los registros de la tabla usuarios.


// PARA PREVENIR Y PROTEGERNOS DE ESTO, HAY QUE GARANTIZAR QUE LOS DATOS PROPORCIONADOS POR LOS USUARIOS SEAN TRATADOS COMO DATOS Y NO COMO DATOS DE LA CONSULTA
$nombre = "Juan Perez";
$sql = "SELECT * FROM usuarios WHERE nombre = ?";
// Usamos un marcador de posición (?) en lugar de insertar directamente el valor de 'nombre' en la consulta SQL.

$stmt = $conn->prepare($sql); // Preparamos la consulta SQL usando el método prepare() de la clase mysqli.

// Verificamos si la preparación de la consulta fue exitosa
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

// Bind de parametros y ejecucion de la consulta
$stmt->bind_param("s", $nombre);
// Vinculamos el parámetro 'nombre' a la consulta preparada. El primer argumento "s" indica que el parámetro es una cadena (string), y puede ser "i" para enteros (integer), "d" para dobles (double), o "b" para blobs (binary), que son datos binarios. El segundo argumento es la variable que contiene el valor a vincular.
$stmt->execute(); // Ejecutamos la consulta preparada.

// Obtener el resultado de la consulta
$resultado = $stmt->get_result();


if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: {$fila['id']} - Nombre: {$fila['nombre']} - Email: {$fila['email']}<br>";
    }
} else {
    echo "0 resultados<br>";
}

$conn->close();
?>