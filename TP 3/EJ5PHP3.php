<?php
	session_start();
	$_SESSION['extra1']=$_POST['texto7'];
	$_SESSION['extra2']=$_POST['texto8'];
	$_SESSION['extra3']=$_POST['texto9'];

	echo "<h1>Ejercicio 5 (3º Script)</h1>";
	echo "<h3>Datos Almacenados:</h3>";
	echo "Nombre: ".$_SESSION['nombre']."<br>";
	echo "Apellido: ".$_SESSION['apellido']."<br>";
	echo "Edad: ".$_SESSION['edad']."<br>";
	echo "DNI: ".$_SESSION['dni']."<br>";
	echo "Pais nacimiento: ".$_SESSION['pais']."<br>";
	echo "Pronvicia nacimiento: ".$_SESSION['provincia']."<br>";
	echo "Extra: ".$_SESSION['extra1']."<br>";
	echo "Extra: ".$_SESSION['extra2']."<br>";
	echo "Extra: ".$_SESSION['extra3']."<br>";
?>
<a href="EJ5PHP4.php">4º Script</a><br><br>
<form action="TP3.Ejercicio5.html" method="get">
    <input type="submit" value="Volver">
</form>