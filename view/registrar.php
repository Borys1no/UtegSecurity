<?php
session_start();
header("Cache-control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!isset($_SESSION["username"])) {
  header("Location: ../controller/log_in.php");

  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/view/static/img/avatar.jpg" type="image/x-icon">
  <link rel="stylesheet" href="/view/static/css/registrar.css">
  <title>Registrar</title>
</head>

<body>
  <div class="container">
    <div class="container-nav">
      <nav class="navbar">
        <a href="inicio.php" class="txtLogo">Registrar una nueva tarjeta</a>
      </nav>
    </div>
  </div>
  <!--Menu-->
  <br><br>

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
  <div class="registro">
    <h1>Formulario de Registro</h1>
    <form action="/controller/insert.php" method="post">
      <div class="form-group">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required>
      </div>
      <div class="form-group">
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
      </div>
      <div class="form-group">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>
      </div>
      <div class="form-group">
        <label for="carrera_area">Carrera/Area:</label>
        <input type="text" id="carrera_area" name="carrera_area" required>
      </div>
      <div class="form-group">
        <label for="periodo">Periodo:</label>
        <input type="text" id="periodo" name="periodo" required placeholder="Ej: 2023-2024">
      </div>
      <div class="form-group">
        <label for="rol">Rol:</label>
        <input type="text" id="rol" name="rol" required>
      </div>
      <div class="form-group">
        <label for="tarjeta">Tarjeta:</label>
        <input type="text" id="tarjeta" name="tarjeta" required placeholder="Ej: AC B2 5G A7">
      </div>

      <div class="form-group">
        <input type="submit" value="Enviar">
      </div>
    </form>
  </div>
  <script src="/view/static/js/main.js"></script>

</body>

</html>