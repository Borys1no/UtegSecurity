<?php
session_start();
header("Cache-control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!isset($_SESSION["username"])) {
  header("Location: ../controller/log_in.php");

  exit();
}
require_once("../controller/conexion.php");
require_once("../controller/perfiles.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/view/static/css/principal.css">
  <link rel="shortcut icon" href="/view/static/img/avatar.jpg" type="image/x-icon">
  <title>Inicio</title>
</head>

<body>
  <div class="container">
    <div class="container-nav">
      <nav class="navbar">
        <a href="inicio.php" class="txtLogo">Bienvenido</a>
      </nav>
    </div>
  </div>
  <!--Menu-->

  <div class="sidebar">
    <button class="openbtn" onclick="toggleSidebar()">☰</button>
    <br><br><br><br> <br>
    <div class="logo">

      <img src="/view/static/img/avatar.jpg">
      <a href="">UtegSecurity</a>
    </div>
    <ul>

      <li><a href="inicio.php">Inicio</a></li>
      <li><a href="registrar.php">Registrar</Ri:a></a></li>
      <li><a href="perfiles.php">Perfiles</a></li>
      <li><a href="/controller/cerrar.php">Cerrar sesion</a></li>
    </ul>
  </div>
  <!--End-->
  <div class="content">
    <!--Table-->
    <div class="table-container">
      <h1 class="heanding">Listado de los perfiles registrados</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Carrera/Area</th>
            <th>Periodo</th>
            <th>Rol</th>
            <th>No Tarjeta</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $conexion = conexion();
          $resultado = consultaMsql();
          while ($fila = mysqli_fetch_assoc($resultado)) {
          ?>
            <tr>
              <td data-label="Nombres"><?php echo $fila['nombres'] ?></td>
              <td data-label="Apellidos"><?php echo $fila['apelidos'] ?></td>
              <td data-label="Carrera/Area"><?php echo $fila['carrera_area'] ?></td>
              <td data-label="Periodo"><?php echo $fila['periodo'] ?></td>
              <td data-label="Rol"><?php echo $fila['rol'] ?></td>
              <td data-label="No Tarjeta"><?php echo $fila['tarjeta'] ?></td>
            </tr>
          <?php }
          mysqli_free_result($resultado);
          mysqli_close($conexion);


          ?>

        </tbody>
      </table>


    </div>
    <script src="/view/static/js/main.js"></script>
</body>

</html>