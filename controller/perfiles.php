<?php 
require_once '../controller/conexion.php';


function consultaMsql(){
  $connect = conexion();

  if(!$connect){
    die("la conexion a la base de datos fallo!: " .mysqli_connect_error());
  }

  $consulta = "SELECT nombres, apelidos, correo, carrera_area, periodo, rol, tarjeta 
             FROM usuarios";
  
  $resultado = mysqli_query($connect, $consulta);

  if (!$resultado) {
    die("La consulta a la base de datos falló: " . mysqli_error($connect));
  }

  return $resultado;

}
