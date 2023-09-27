<?php
require_once("conexion.php");


$connect = conexion();

if (!$connect) {
  die("la conexion a la base de datos fallo!: " . mysqli_connect_error());
}

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$carrera_area = $_POST['carrera_area'];
$periodo = $_POST['periodo'];
$rol = $_POST['rol'];
$tarjeta = $_POST['tarjeta'];


$consulta = "INSERT INTO usuarios(nombres, apelidos, correo, carrera_area, periodo, rol, tarjeta)
VALUES('".$nombres."', '".$apellidos."', '".$correo."', '".$carrera_area."', '".$periodo."', '".$rol."', '".$tarjeta."')";
$execute = mysqli_query($connect, $consulta) or die(mysqli_error($connect));

$connect->close();
?>

<script type="text/javascript">
alert("Se registro correctamente");
window.location.href="/view/registrar.php"
</script>
