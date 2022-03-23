<?php
$conn = mysqli_connect('localhost','root','','biblioteca1') or die(mysqli_error($conn));

/*SEGUNDA FORMA DE CONECTAR LA BASE DE DATOS 
// Datos para conectar a la base de datos.
  $server = "localhost";
  $username= "root";
  $password = "";
  $bd= "biblioteca1";
  
  // Crear conexión con la base de datos.
  $conn = new mysqli($server, $username, $password, $bd);
   
  // Validar la conexión de base de datos.
  if ($conn -> connect_error) {
    die("No Puede Conectar A La BD: " . $conn -> connect_error);
  }*/

?>