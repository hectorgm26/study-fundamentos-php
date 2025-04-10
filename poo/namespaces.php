<?php
// Los namespaces son una manera de encapsular elementos como clases, interfaces, funciones y constantes en PHP. Esto permite organizar mejor el código y evitar conflictos de nombres entre diferentes partes de una aplicación o entre diferentes bibliotecas.

// Permiten que dos elementos tengan el mismo nombre, siempre y cuando estén en diferentes namespaces. Esto es especialmente útil en aplicaciones grandes o cuando se utilizan bibliotecas de terceros que pueden tener nombres de clases o funciones similares, ya que permiten que diferentes biblitecas y paquetes utilicen los mismos nombres sin conflictos.

// Los namespaces se declaran al inicio de un archivo PHP utilizando la palabra clave "namespace", seguida del nombre del namespace. Por convención, los nombres de los namespaces suelen seguir la estructura de nombres de dominio invertida, como "com.ejemplo.proyecto".

// Estos se colocan siempre al inicio del archivo, antes de cualquier otra declaración. Si no se especifica un namespace, el código se considera parte del namespace global.


namespace Usuarios;
class Database{

    public function connect() {
        echo "Conectando a la base de datos de usuarios<br>";
    }
}

namespace Productos;
class Database{

    public function connect() {
        echo "Conectando a la base de datos de productos<br>";
    }
}

// Si eliminamos el namespace Productos, generara un error, ya que hay dos clases Database con el mismo nombre, lo que causara un conflicto de nombres.

// Para evitar esto, podemos usar el operador de resolución de ámbito (::) para especificar a qué clase nos referimos. Por ejemplo, si queremos usar la clase Database del namespace Usuarios, podemos hacerlo así:
$usuariosDB = new \Usuarios\Database();
$usuariosDB->connect(); // Conectando a la base de datos de usuarios<br>

// Si queremos usar la clase Database del namespace Productos, podemos hacerlo así:
$productosDB = new \Productos\Database();
$productosDB->connect(); // Conectando a la base de datos de productos<br>
?>