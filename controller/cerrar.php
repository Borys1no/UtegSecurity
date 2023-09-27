<?php 
session_start();

session_destroy();

if (isset($_COOKIE['auth_cookie'])) {
  setcookie('auth_cookie', '', time() - 3600, '/');
}
header('Location: /view/home.php');
exit();
?>