<?php

$url = "https://reqres.in/api/users?page=2"; // URL de la API a consumir con su endpoint

$ch = curl_init($url); // Inicializamos una sesión cURL pasando la URL de la API como parámetro

// Ahora configuarmos curl para que devuelva la respuesta como un string, en lugar de imprimirla directamente como lo hace por defecto
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt recibe dos parámetros: el primero es la sesión cURL y el segundo es la opción que queremos configurar. En este caso, CURLOPT_RETURNTRANSFER es una opción que le dice a cURL que queremos recibir la respuesta como un string, y el valor true indica que sí queremos esa opción. Si no se especifica esta opción, cURL imprimirá la respuesta directamente en la salida estándar (pantalla).

// Ejecutamos la petición a la API y guardamos la respuesta en una variable
$response = curl_exec($ch);

// Cerramos la sesión cURL
curl_close($ch);

// Decodificaros la respuesta JSON a un array asociativo de PHP. Este luego se puede iterar con un for para obtener los datos que nos interesen
$data = json_decode($response, true);
// El segundo parámetro de json_decode es true, lo que significa que queremos que la respuesta se convierta en un array asociativo. Si no se especifica este parámetro o se establece en false, la respuesta se convertirá en un objeto de PHP.

// Ahora podemos acceder a los datos de la respuesta como un array asociativo de PHP, imprimiendo la respuesta iterando el array para ver los datos que nos interesan (los datos que interesan se deben buscar en la documentación de la API, en este caso, en el campo "data" de la respuesta JSON)

// El for itera sobre cada elemento del array "data" de la respuesta JSON, siendo $user cada elemento del array
foreach ($data["data"] as $user) {
    echo "ID: " . $user["id"]."<br>";
    echo "Nombre: " . $user["first_name"]."<br>";
    echo "Apellido: " . $user["last_name"]."<br>";
    echo "Email: " . $user["email"]."<br><br>";
}

// La respuesta JSON de esta API tiene una estructura jerárquica, donde el campo "data" contiene un array de objetos, y cada objeto representa un usuario con sus respectivos campos.


// NO SOLAMENTE PODEMOS CONSUMIR CON GET, TAMBIEN PODEMOS HACER OTRAS SOLICITUDES COMO POST, PUT, DELETE, PATCH, OPTIONS Y HEAD. ESTO SE HACE CONFIGURANDO LA OPCION CURLOPT_CUSTOMREQUEST DE CURL. AQUI UN EJEMPLO DE COMO HACER UNA PETICION POST A UNA API CON CURL EN PHP:

?>