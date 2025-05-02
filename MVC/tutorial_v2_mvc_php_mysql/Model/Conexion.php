<?php

class Conexion{

  //Propiedades
  private $con;

  public function __construct()
  {
    $this->con = new mysqli("localhost", "root", "", "facebookperorojo");
  }

  public function getUsers() {
    $query = $this->con->query("SELECT * FROM usuarios");

    $retorno = [];

    $i = 0;
    while($fila = $query->fetch_assoc()) { // Mientras todavia haya una fila para leer, quuiero añadir las filas a mi array retorno. y con fetch_assoc() se extraen los datos de la fila
      $retorno[$i] = $fila;
      $i++;
    }
    return $retorno;
  }

}

?>