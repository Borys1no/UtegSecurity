<?php 
require_once '../controller/conexion.php';


function consultaMsql(){
  $connect = conexion();

  if(!$connect){
    die("la conexion a la base de datos fallo!: " .mysqli_connect_error());
  }

  $consulta = "SELECT u.nombres, u.apelidos, u.carrera_area, u.rol, u.tarjeta, i.fechaH_entrada, i.fechaH_salida
             FROM usuarios AS u
             JOIN ingreso AS i ON u.id = i.id_usuario";
  
  $resultado = mysqli_query($connect, $consulta);

  if (!$resultado) {
    die("La consulta a la base de datos falló: " . mysqli_error($connect));
  }

  return $resultado;

}
