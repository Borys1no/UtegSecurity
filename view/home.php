<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/view/static/css/home.css">
  <link rel="shortcut icon" href="/view/static/img/avatar.jpg" type="image/x-icon">
  <title>Document</title>
</head>
<body>
<div class="container">
        <div class="container-nav">
            <nav class="navbar">
                <a href="home.php" class="txtLogo">Uteg Security</a>
            </nav>
        </div> <br>
        <div class="login-container">
            <h1 class="txt-bienvenida">Bienvenidos</h1>
            <img src="/view/static/img/logo-uteg.png" alt="UTEG Logo" class="logo-uteg">

            <form class="login-form" action="../controller/log_in.php" method="POST">
                <input type="email" class="user" placeholder="Usuario" name="username" id="password">
                <input type="password" name="password" id="password" class="pass" placeholder="Contraseña">
                <button type="submit" class="btnIniciar">Iniciar Sesion</button>
            

            </form>
        </div>
    </div>
</body>
</html>