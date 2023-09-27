<?php 


function conexion(){
  $servidor = "localhost";
  $usuario = "root";
  $contrasena = "Borysaston1!";
  $base = "security";
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $base);



  return $conexion; // Devuelve la conexión para que puedas usarla fuera de la función.
}

// Llama a la función para obtener la conexión
$conexion = conexion();


?> 