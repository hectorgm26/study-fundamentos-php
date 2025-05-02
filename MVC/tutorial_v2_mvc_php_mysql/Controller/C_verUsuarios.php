<?php

require('Model/Conexion.php');

$con = new Conexion();

$usuarios = $con->getUsers();

require_once('Views/V_verUsuarios.php');

?>