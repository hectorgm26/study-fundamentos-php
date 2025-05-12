<?php

if ($_POST) {

    // Para castear un valor a un tipo de dato específico, se puede usar (int), (float), (string), (bool), etc.
    $valorA = (int) $_POST['ValorA'];
    $valorB = (int) $_POST['ValorB'];

    if ($valorA != $valorB) {
        echo "El valor de A es diferente al valor de B <br><br>";
    } else {
        echo "El valor de A es igual al valor de B <br><br>";
    }

    if (!empty($_POST['TipoOperacion'])) {
        $operacion = $_POST['TipoOperacion'];

        switch($operacion) {
            case 'suma':
                $suma = $valorA + $valorB;
                echo "La suma de $valorA y $valorB es: $suma <br><br>";
                break;
            case 'resta':
                $resta = $valorA - $valorB;
                echo "La resta de $valorA y $valorB es: $resta <br><br>";
                break;
            case 'multiplicacion':
                $multiplicacion = $valorA * $valorB;
                echo "La multiplicacion de $valorA y $valorB es: $multiplicacion <br><br>";
                break;
            case 'division':
                if ($valorB != 0) {
                    $division = $valorA / $valorB;
                    echo "La division de $valorA y $valorB es: $division <br><br>";
                } else {
                    echo "No se puede dividir entre cero <br><br>";
                }
                break;
            default:
                echo "Operacion no valida <br><br>";
                break;
        }
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
    <form action="ejercicio12.php" method="POST">
        <label for="ValorA">Valor A:</label>
        <input type="text" name="ValorA">
        <br><br>
        <label for="ValorB">Valor B:</label>
        <input type="text" name="ValorB">
        <br><br>

        <label for="TipoOperacion">Tipo de Operacion</label>
        <input type="radio" name="TipoOperacion" value="suma">Suma
        <input type="radio" name="TipoOperacion" value="resta">Resta
        <input type="radio" name="TipoOperacion" value="multiplicacion">Multiplicacion
        <input type="radio" name="TipoOperacion" value="division">Division

        <br><br>
        <input type="submit" value="Calcular">
    </form>
    
</body>
</html>