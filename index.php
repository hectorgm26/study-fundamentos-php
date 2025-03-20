<?php
# Para levantar un servidor local con php puro: php -S localhost:8000
# Con php podemos mezclar en una pagina codigo html, cssm js y php
echo "Hola Mundo con PHP!!!"; # Esta da salida para la web, es como un console.log, pero que se refleja en la web

# Podemos colocar varias etiquetas php en un mismo archivo, en cualquier parte del archivo
# Para declarar variables en php se antepone un signo $ al nombre de la variable, y no se puede colocar como primer caracter un numero, ni simbolos especiales 
$nombre = "Hector";
$edad = 27;
$esMayor = true;
$esJoven = $edad >= 18;
$esDev = true;

# Casting implicito, ya que php convierte el string "1" a un numero para poder sumarlo. Pasa lo mismos sumando dos strings que sean numeros
$nuevoAño = 39 + "1";

# Constantes hay de 2 tipos, y no funcionan en tiempo de ejecucion por ser inmutables, ni tampoco definiarlas dentro de una funcion o bucle:
# 1. Globales (en cualquier parte del codigo se podran utilizar), y se declaran con define(), con 2 parametros: el nombre de la constante y su valor
define("PHP_LOGO_URL", "https://www.php.net/images/logos/new-php-logo.svg");
# 2. Locales a nivel de clase o donde estamos trabajando, y se declaran con const, en mayuscula, no se coloca el signo $, y se le asigna un valor
const NOMBRE = "Hector";

# Si se quiere concatenar strings, no se usa el simbolo +, sino el punto .  Operador QUE ES SOLO PARA STRINGS (No necesita espacio entremedio, ejemplo: $nombreCompleto = $nombre."Gonzalez"; pero el espacio es ideal en la concatenacion para que no se vea todo pegado)
$nombreCompleto = $nombre . " Gonzalez";
# Otra forma de concatenar es la siguiente:
echo "Hola {$nombre}";
# Asi se interpola una variable en un string, PERO SE HACE SIEMPRE CON COMILLAS DOBLES, NO SIMPLES, ya que con las simples no se interpola la variable

# Para hacer un salto de linea en php se usa la etiqueta <br>
echo "<br> Hola "
. $nombre
. " Gonzalez"
. "<br>"
. "tienes una edad de: "
. $edad;

# Escapar datos y simbolos
$output = "Hola \"$nombre\", con una edad de \$edad"; # El \" escapa las comillas dobles, y el \$ escapa el signo de dolar, mostando comillas y el signo dolar
echo $output;

?>

<img src="<?= PHP_LOGO_URL; ?>" alt="Logo de PHP" width="200">

<h1>
<!-- # Forma corta de hacer un echo de un string -->
<?= $nombre; ?>
<?= $nuevoAño; ?>
<?= $nombreCompleto; ?>
</h1>

<p>
<?php
# El metodo var_dump() nos permite ver el tipo de dato de una variable, su tamaño, y su valor, y lo muestra en la web
var_dump($nombre);
var_dump($edad);
var_dump($esMayor);

# El metodo gettype() nos permite ver el tipo de dato de una variable, y lo muestra en la web
echo gettype($nombre);
# Sin embargo, hay muchos metodos is_ para saber si una variable es de un tipo en especifico, devolviendo un booleano (1 si es verdadero, 0 si es falso)
echo is_string($nombre);

# Forzado de tipo type casting
$numero = (bool) 44; # Esto forzara a que el numero 44 sea un booleano, y como es distinto de 0, sera true
echo "{$nombre} con una edad de {$numero}";
# Una cadena de texto casteandola a entero arrojara 0
?>
</p>


<?php
# Operadores de comparacion
if ($esMayor) {
  echo "<h2>Eres viejo, lo siento</h2>";
} else if ($esDev) { # else if se puede escribir junto (elseif) o separado
  echo "<h2>No eres viejo, pero eres dev. Estad jodido</h2>";
} else {
  echo "<h2>Eres joven, disfruta</h2>";
}

# Operadores ternarios
echo $esMayor ? "<h2>Eres viejo, lo siento</h2>" : "<h2>Eres joven, disfruta</h2>";

# O con espacios
$salida = $esMayor
  ? "<h2>Eres viejo, lo siento</h2>"
  : "<h2>Eres joven, disfruta</h2>";
?>
<h2> <?= $salida ?> </h2>

<!-- # Forma de hacer un if/else para aprovechar el sistema de plantillas de php, sin colocar echo, solo colocando el codigo html que se necesite -->
<?php if ($esMayor) : ?>
  <h2>Eres viejo, lo siento</h2>
<?php elseif ($esDev) : ?> <!-- Si O SI DE ESTA FORMA EL ELSEIF DEBE IR JUNTO -->
  <h2>No eres viejo, pero eres dev. Estad jodido</h2>
<?php else : ?>
  <h2>Eres joven, disfruta</h2>
<?php endif; ?>


<?php
# Switch
$color = "rojo";
switch ($color) {
  case "rojo":
    echo "<h2>El color es rojo</h2>";
    break;
  case "azul":
    echo "<h2>El color es azul</h2>";
    break;
  default:
    echo "<h2>El color no es ni rojo ni azul</h2>";
    break;
}
?>

<?php
# Match
$nombre2 = "Yanira";
$edad2 = 25;

$corroborarEdad = match ($edad2) { # Se recibe el parametro, y se compara con los valores casos de la izquierda, y se retorna el valor de la derecha
0,1,2 => "Eres un bebe, {$nombre2}",
3,4,5,6,7, 8, 9, 10 => "Eres un niño, {$nombre2}",
11,12,13,14,15,16,17 => "Eres un adolescente, {$nombre2}",
18,19,20,21,22,23,24,25,26,27,28,29,30 => "Eres un adulto joven, {$nombre2}",
default => "Eres un adulto, {$nombre2}"
};

$corroborarConExpresiones = match (true) { # Compara si true es igual a true para evitar hacer muchas comparaciones
  $edad2 <= 2     => "Eres un bebe, {$nombre2}",
  $edad2 <= 10    => "Eres un niño, {$nombre2}",
  $edad2 <= 17    => "Eres un adolescente, {$nombre2}",
  $edad2 == 18    => "Eres mayor de edad {$nombre2}",
  $edad2 < 40     => "Eres un adulto joven, {$nombre2}",
  $edad2 >= 40    => "Eres un adulto {$nombre2}",
  default         => "Eres un viejo, hueles mas a madera que a fruta {$nombre2}"
};
?>

<h2> <?php echo $corroborarEdad; ?> </h2>
<h2> <?php echo $corroborarConExpresiones; ?> </h2>

<?php
# Estructuras de datos: ARRAYS

$mejoresLenguajes = ["PHP", "JavaScript", "Python", "Java", "C#", 1];
# Agregar un elemento al final del array, ponienddo corchetes vacios, haciendo como que se accedera a una posicion que no existe
$mejoresLenguajes[] = "Ruby";
$mejoresLenguajes[5] = "Kotlin"; #Reemplaza el valor de la posicion 5

# Recorrer un array con un for
for ($i = 0; $i < count($mejoresLenguajes); $i++) {
  echo "<h3>{$mejoresLenguajes[$i]}</h3>";
}

# Eliminar un elemento de un array
unset($mejoresLenguajes[5]);

# Agregar un elemento al inicio del array
array_unshift($mejoresLenguajes, "C++");

/*  Recorrer con un for each
foreach ($mejoresLenguajes as $lenguaje) {
  echo "<h3>{$lenguaje}</h3>";
}
*/
?>

<h3>
  El mejor lenguaje es <?php echo $mejoresLenguajes[0] ?>
</h3>

<!-- Recorrer un array con un foreach, dentro de html (se agrega endforeach al final, debido a que no se puede cerrar el foreach con un /foreach) -->
<ul>
  <?php foreach ($mejoresLenguajes as $lenguaje) : ?>
    <li> <?php echo $lenguaje ?> </li>
  <?php endforeach; ?>
</ul>

<br>

<!-- Con el foreach podemos acceder al indice -->
<ul>
  <?php foreach ($mejoresLenguajes as $key => $lenguaje) : ?>
    <li> <?php echo "{$key} - {$lenguaje}" ?> </li>
  <?php endforeach; ?>
</ul>


<?php
# Estructuras de datos: Maps o diccionarios, que son arrays asociativos, es decir, que tienen una clave y un valor, cada indice es un texto que es la clave, y el valor es el valor que se le asigna a esa clave
$persona = [
  "nombre" => "Hector",
  "edad" => 27,
  "esDev" => true,
  "lenguajes" => ["PHP", "JavaScript", "Python", "Java", "C#"]
];

# Cambiar valores
$persona["nombre"] = "Yanira";

# Agregar valores
$persona["apellido"] = "Gonzalez"; #En corchetes se coloca una llave que no exista para agregar un nuevo valor

#Acceder a un valor
echo $persona["nombre"];
?>

<?php
# Bucle While

$contador = 0;

while ($contador < 10) {
  echo "<h4>{$contador}</h4>";
  $contador++;
}

?>

<?php
# Bucle Do While, aca se entrar al bucle al menos una vez, y luego se evalua la condicion

$contador2 = 0;

do {
  echo "<h4>{$contador2}</h4>";
  $contador2++;
} while ($contador2 < 10);

?>

<style>
  :root {
  color-scheme: light dark;
  }

  * {
  box-sizing: content-box;
  margin: 0 auto; /* Centra el contenido, cero es para arriba y abajo, y auto es para los lados */
  }

  body {
  display: grid;
  place-content: center;
  }

  ul {
    width: 50%;
  }
</style>