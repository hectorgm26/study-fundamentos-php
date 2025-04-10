<?php

$serverName = "localhost"; // Nombre del servidor
$userName = "root"; // Nombre de usuario por defecto de MySQL
$password = ""; // Contraseña por defecto de MySQL
$databaseName = "ejemplo_db"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($serverName, $userName, $password, $databaseName); // Instanciamos un objeto de la clase mysqli, y le pasamos los parámetros de conexión

// Comprobar conexión de manera exitosa - se llama al metodo connect_error de la clase mysqli para verificar si hay errores en la conexión
if ($conn->connect_error){
    die("Error de conexión: " . $conn->connect_error); // Si hay un error, se muestra el mensaje de error y se detiene la ejecución del script
}

echo "Conexión exitosa a la base de datos.<br>"; // Si la conexión es exitosa, se muestra un mensaje


// CONSULTAS A LA BASE DE DATOS

// Consulta select
$sql = "SELECT id, nombre, email FROM usuarios";
$resultado = $conn->query($sql); // A traves del metodo query del objeto mysqli, ejecutamos la consulta SQL y guardamos el resultado en la variable $resultado. Podemos pasarle directamente la consulta SQL como parámetro.

// Comprobar si hay resultados para mostrarlos - con num_rows verificamos si hay filas en el resultado de la consulta (mayor a 0)

// En este caso, se usa el método fetch_assoc() para obtener cada fila como un array asociativo, donde las claves son los nombres de las columnas de la tabla.
// Esto devuelve un array asociativo con los resultados de la consulta, que podemos recorrer con un bucle while, ejecutando un codigo hasta que no haya más filas para mostrar.

// Ejemplo: 1 juan juan@gmail.com | 2 Maria maria@gmail.com | con fetch_assoc guardamos el resultado de la primera fila en la variable $fila, y luego podemos acceder a los valores de cada columna usando el nombre de la columna como clave del array asociativo. Ejemplo: $fila['id'], $fila['nombre'], $fila['email'], hasta que el resultado no tenga más filas para mostrar.
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: {$fila['id']} - Nombre: {$fila['nombre']} - Email: {$fila['email']}<br>";
    }
} else {
    echo "La tabla está vacia";
}


// Consulta insert - se usa la sintaxis de comillas simples para los valores de la consulta SQL.
$sql_Insert = "INSERT INTO usuarios(nombre, email) VALUES ('Hector Gonzalez', 'hector@gmail.com')";

// Se comprueba si la consulta se ejecutó correctamente, comparando el resultado de la consulta con TRUE. Si es así, se muestra un mensaje de éxito.
if ($conn->query($sql_Insert) == TRUE) {
    echo "Nuevo registro insertado correctamente.<br>";
} else{
    echo "Error: {$sql_Insert}" . " " . $conn->error."<br>";
// la interpolación con {$} solo funciona con variables simples o con accesos sencillos a propiedades/índices, no con métodos ni expresiones complejas como $conn->error.
}


// Consulta update - Actualizar datos
$sql_Update = "UPDATE usuarios SET nombre='Yanira Fontalba', email='yanira@gmail.com' WHERE id=8";

if ($conn->query($sql_Update) == TRUE) {
    echo "Registro actualizado correctamente.<br>";
} else{
    echo "Error: {$sql_Update}" . " " . $conn->error."<br>";
}


// Consulta delete - Eliminar datos de la base de datos
$sql_Delete = "DELETE FROM usuarios WHERE id=10";

if ($conn->query($sql_Delete) == TRUE) {
    echo "Registro eliminado correctamente.<br>";
} else{
    echo "Error: {$sql_Delete}" . " " . $conn->error."<br>";
}

$conn->close();
// Siempre que abrimos una conexión a la base de datos, es recomendable cerrarla al final del script para liberar recursos. Esto se hace llamando al método close() de la clase mysqli.
?>