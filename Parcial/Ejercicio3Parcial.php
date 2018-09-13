<?php
	$arreglo=array(
        "Gonzalo"=>array("gonza","gonzalotempra@gmail.com"),
        "Juan" =>array("hola","juanperez@gmail.com"),
        "Pablo" =>array("chau","pablogomez@gmail.com")
    );

	$nombre=$_POST[usuario];
	$pass=$_POST[clave];
	if ($arreglo[$nombre][0] == $pass) {
			echo "Nombre:  ". $nombre ."<br>";
			$mail=$arreglo[$nombre][1];
			echo "Mail:  ". $mail;
	}
	else {
			echo "Datos incorrectos";
	}
 ?>