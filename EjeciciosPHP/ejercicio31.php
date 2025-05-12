<?php

// Recepcion de datos de un formulario

// Podemos incrustar en el html codigo embedido de php, para que se ejecute en el servidor y luego se envíe al cliente el resultado de la ejecución del código php. Para ello hay que abrir y cerrar las etiquetas de php, y entre ellas escribir el código php que queremos ejecutar. El resultado de la ejecución del código php se incrustará en el html donde se encuentre el código php. Incluive se puede cerrar la etiqueta php y abrirla en cualquier parte del html.

// Estructura operador ternario
// Sintaxis: (condicion) ? valor si verdadero : valor si falso;

$txtNombre = ""; // Se inicializan en vacio para evitar errores de variable no definida
$rdLenguaje = "";
$chkphp = "";
$chkjavascript = "";
$chkjava = "";
$isAnime = "";
$txtComentario = "";

if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : ""; // operador ternario que indica que si hay algo en el campo txtNombre, lo asigna a la variable $txtNombre, si no hay nada, le asigna una cadena vacia
    $rdLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";

    $chkphp = (isset($_POST['chkphp']) == "si") ? "checked" : ""; // El checked es para que cuando se recargue la pagina, y el usuario haya marcado el checkbox, se mantenga marcado. Si no se marca, no se mostrara el checked.

    $chkjavascript = (isset($_POST['chkjavascript']) == "si") ? "checked" : "";
    $chkjava = (isset($_POST['chkjava']) == "si") ? "checked" : "";

    $isAnime = (isset($_POST['isAnime'])) ? $_POST['isAnime'] : "";

    $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";

    // print_r($isAnime);
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php if($_POST) { ?>
    <trong>Hola: </trong><?php echo $txtNombre . "!"; ?>
    <br>
    <strong>Tu lenguaje favorito es: </strong> <?php echo $rdLenguaje; ?>
    <br>
    <strong>Estas aprendiendo: </strong><br>
        <?php echo ($chkphp =="checked") ? "PHP": "" ?><br>
        <?php echo ($chkjavascript =="checked") ? "JavaScript": "" ?><br>
        <?php echo ($chkjava =="checked") ? "Java": "" ?><br>
    <br>
    <strong>Tu anime favorito es: </strong> <?php echo $isAnime; ?>
    <br>
    <strong>Tu mensaje fue: </strong> <?php echo $txtComentario; ?>

    <?php } ?>

    <form action="ejercicio31.php" method="post">

        <br>
        <label for="nombre">Nombre:</label><br>
        <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" placeholder="Nombre"<br><br><br> <!-- Poner el valor en el value es para que si se recarga la pagina, el valor no se pierda, y se mostrarra en el campo de texto. -->

        <label for="lenguaje"">¿Te gusta?</label><br>
        <input type="radio" <?php echo ($rdLenguaje == "php") ? "checked": "" ?> name="lenguaje" value="php"> PHP<br>
        <input type="radio" <?php echo ($rdLenguaje == "javascript") ? "checked": "" ?> name="lenguaje" value="javascript"> JavaScript<br>
        <input type="radio" <?php echo ($rdLenguaje == "java") ? "checked": "" ?> name="lenguaje" value="java"> Java<br><br>

        <label for""">Estas Aprendiendo...</label><br>
        <input type="checkbox" <?php echo $chkphp ?> name="chkphp" value="si"> PHP<br>
        <input type="checkbox" <?php echo $chkjavascript ?> name="chkjavascript" value="si"> JavaScript<br>
        <input type="checkbox" <?php echo $chkjava ?> name="chkjava" value="si"> Java<br><br>

        <label for="IsAnime">¿Que anime te gusta?</label><br>
        <select name="isAnime">
            <option value="">[Ninguna Serie]</option>
            <option value="naruto" <?php echo ($isAnime == "naruto") ? "selected" : "" ?> >Naruto</option>
            <option value="dbz" <?php echo ($isAnime == "dbz") ? "selected" : "" ?> >Dragon Ball Z</option>
            <option value="onepunch" <?php echo ($isAnime == "onepunch") ? "selected" : "" ?> >One Punch Man</option>
        </select><br><br>

        <label>¿Tienes alguna duda?</label><br>
        <textarea name="txtComentario" value="EnviarInfo" cols="30" rows="10">
            <?php echo $txtComentario ?>
        </textarea><br>

        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>