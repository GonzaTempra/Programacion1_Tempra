<?php
$servidor = "localhost";
$usuario = "Gonzalo";
$clave = "Gonzalo";
$base = "usuario";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);
$user = $_POST['usuario'];
$pass = $_POST['contraseña'];
$params= array('usuario'=>$user,'clave' => $pass);
$sql = "INSERT INTO usuario (usuario, clave, habilitado, rol) VALUES (:usuario, :clave, 1, 'usuario')";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute($params);
header('Location: inicio.html');
?>