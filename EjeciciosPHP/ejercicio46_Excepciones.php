<?php

// Las excepciones son una forma de manejar errores en PHP.
// Dos formas de lanzar excepciones:
// 1. Lanzar una excepción de manera intencional con throw new TipoExcepcion("mensaje de error personalizado");
// 2. Lanzar una excepción de manera no intencional (por ejemplo, al intentar abrir un archivo que no existe)

// $resultado = 10 / 0;
//echo $resultado; LANZARA UNA EXCEPCION DE TIPO ZERO DIVISION

try {
    // echo "Hola mundo<br>";
    throw new Exception("Mensaje de Error de prueba", 1); // Podemos Lanzar una excepción de manera intencional, PERO NO ARROJA NADA POR NO CAPTURARLA
} catch (Throwable $error) { // al catch se le pasa el Throwable, que es la clase padre de Exception y Error
    echo "Aqui tenemos el error: " . $error->getMessage();
} catch (Throwable $error) {
    echo "Aqui tenemos el error: " . $error->getMessage();
}catch (Throwable $error) {
    echo "Aqui tenemos el error: " . $error->getMessage();
}catch (Throwable $error) {
    echo "Aqui tenemos el error: " . $error->getMessage();
}finally {
    echo "<br>Siempre sera ejecutado sin importar nada";
}

// La clase Throwable es la clase padre de Exception y Error, y tiene varios métodos:
// getMessage(): devuelve el mensaje de error
// getCode(): devuelve el código de error
// getFile(): devuelve el archivo donde se produjo el error
// getLine(): devuelve la línea donde se produjo el error
// getTrace(): devuelve el rastro de la pila de llamadas
// getTraceAsString(): devuelve el rastro de la pila de llamadas como una cadena
// __toString(): devuelve una representación en cadena del objeto Throwable

echo "<br>";

// EJERCICIO

function sumar($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Los valores deben ser numéricos"); // En estas lineas ocurren los errorees que nosotros lanzamos manualmente
    }
    return $num1 + $num2;
}

function restar($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Los valores deben ser numéricos"); // En estas lineas ocurren los errorees que nosotros lanzamos manualmente
    }
    return $num1 - $num2;
}

function multiplicar($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Los valores deben ser numéricos"); // En estas lineas ocurren los errorees que nosotros lanzamos manualmente
    }
    return $num1 * $num2;
}

function dividir($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Los valores deben ser numéricos"); // En estas lineas ocurren los errorees que nosotros lanzamos manualmente
    }
    if ($num2 == 0) {
        throw new DivisionByZeroError("No se puede dividir por cero"); // En estas lineas ocurren los errorees que nosotros lanzamos manualmente
    }
    return $num1 / $num2;
}

try {
    $resultadoSuma = sumar(10, 5);
    echo "La suma es: " . $resultadoSuma . "<br>";

    $resultadoDivision = dividir(10, 2);
    echo "La división es: " . $resultadoDivision . "<br>";

    $numero = 5;
    if ($numero < 10) {
        throw new Exception("Este es un error no manejado");
    }

} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "<br>";
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage() . "<br>";
} catch (Exception $e) {        // Captura cualquier otra excepción
    echo "Ocurrio una excepcion no manejada: " . $e->getMessage() . "<br>";
} finally {
    echo "Fin del programa<br>";
}

// Cuando se captura un error, la ejecución del codigo del try se detiene y se pasa al bloque catch correspondiente.

echo "Sigo con mi vida<br>";
?>