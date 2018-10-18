<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(empty($_SESSION['login']) or $_SESSION["rol"] != "usuario"){
        header('Location: inicio.html');
        exit;
      }
      echo "El Usuario esta habilitado y tiene el rol: ".$_SESSION['rol'];

     ?><br><br>
     <a href='logout.php'>Cerrar Sesion</a>
  </body>
</html>