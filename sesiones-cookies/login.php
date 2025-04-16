<?php

// AUTENTICACION Y AUTORIZACION DE USUARIOS - ESTO GENERALMENTE SE HACE EN UNA BASE DE DATOS

session_start(); // Inicia la sesión

$usuarios = array(
    "user1" => "pass1",
    "user2" => "pass2",
    "user3" => "pass3",
    "user4" => "pass4",
);

function verificarInicioSesion($usuario, $contrasena, $usuarios) {
    return isset($usuarios[$usuario]) && $usuarios[$usuario] === $contrasena; // SE COMPARA SI EL USUARIO EXISTE EN EL ARRAY Y SI LA CONTRASEÑA ES CORRECTA
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if (verificarInicioSesion($usuario, $contrasena, $usuarios)) {
            $_SESSION['usuario'] = $usuario; // SE ALMACENA EL USUARIO EN LA SESION
            header('Location: paginaPrincipal.php'); // REDIRECCIONA A LA PAGINA DE INICIO
            exit;

        } else {
            $error = "Nombre de usuario y/o contraseña incorrectos"; // MENSAJE DE ERROR
            echo $error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Iniciar Sesion</h2>

    <form method="POST" action="">
        <label for="usuario">Usuario: </label>
        <input type="text" id="usuario" name="usuario"><br>

        <label for="contrasena">Password: </label>
        <input type="text" id="contrasena" name="contrasena"><br>

        <input type="submit" value="Iniciar Sesion">
    </form>
</body>
</html>