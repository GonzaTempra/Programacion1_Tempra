<?php
session_start();
if($_SESSION["rol"] != "admin"){
    header('Location: inicio.html');
    exit;
}else{
	echo "El usuario es administrador";
}
?>