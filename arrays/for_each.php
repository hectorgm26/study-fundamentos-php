<?php

# Los foreach son un tipo de bucle especializado en recorrer arrays, y se utilizan de la siguiente forma:

$names = ["Hector", "Juan", "Pepe", "Luis"];

foreach ($names as $name) {
    echo $name . "<br>";
}
# Dentro del foreach, se coloca el array a recorrer, y se asigna una variable que tomará el valor singular de cada elemento del array en cada iteración.


# Si se quiere acceder al índice de cada elemento, se puede hacer de la siguiente forma:
foreach ($names as $key => $name) {
    echo $key . " - " . $name . "<br>";
}
# En este caso, se asignan dos variables, la primera para el índice y la segunda para el valor del elemento.

# Si se quiere modificar el valor de un elemento, se debe hacer de la siguiente forma:


# Tambien funciona con arrays asociativos
$beer = [
  "name"  => "Guinness",
  "color" => "black",
  "taste" => "bitter"
];

foreach ($beer as $llave => $valor) {
  echo $llave . " - " . $valor . "<br>";
}


# ACLARACION: EXISTEN DOS FORMAS DE HACER UN FOR EACH

# 1. Estilo con llaves {}
# Este es el estilo más común, similar a otros lenguajes como Java o JavaScript.

foreach ($usuarios as $user) {
    echo "<tr>";
    echo "<td>" . $user['username'] . "</td>";
    echo "<td>" . $user['password'] . "</td>";
    echo "<td>" . $user['nombre'] . "</td>";
    echo "</tr>";
}

# 2. Estilo con endforeach;
# Este estilo se usa más en HTML embebido dentro de PHP, como en archivos .php con código HTML.

<?php foreach ($usuarios as $user): ?>
    <tr>
        <td><?= $user['username']; ?></td>
        <td><?= $user['password']; ?></td>
        <td><?= $user['nombre']; ?></td>
    </tr>
<?php endforeach; ?>

?>
