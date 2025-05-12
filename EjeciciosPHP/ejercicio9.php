<?php

if ($_POST) {

    // Para castear un valor a un tipo de dato específico, se puede usar (int), (float), (string), (bool), etc.
    $valorA = (int) $_POST['ValorA'];
    $valorB = (int) $_POST['ValorB'];

    if ($valorA > $valorB) {
        echo "El valor A es mayor que el valor B<br><br>";
    } else {
        echo "El valor B es mayor que el valor A<br><br>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="ejercicio9.php" method="POST">
        <label for="ValorA">Valor A:</label>
        <input type="text" name="ValorA">
        <br><br>
        <label for="ValorB">Valor B:</label>
        <input type="text" name="ValorB">
        <br><br>

        <input type="submit" value="Calcular">
    </form>
    
</body>
</html>