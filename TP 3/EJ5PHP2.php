<?php
	session_start();
	$_SESSION['dni']=$_POST['texto4'];
	$_SESSION['pais']=$_POST['texto5'];
	$_SESSION['provincia']=$_POST['texto6'];
	echo "<h1>Ejercicio 5 (2º Script)</h1>
		<form action='EJ5PHP3.php' method='post' enctype='multipart/form-data'
		<label>Datos</datos><br><br>
		Dato extra:<input type='text' name='texto7'><br><br>
		Dato extra:<input type='text' name='texto8'><br><br>
		Dato extra:<input type='text' name='texto9'><br><br>
		<input type='submit' value='Enviar'
	";

?>
<form action="EJ5PHP1.php" method="get">
	<input type="submit" value="Volver">
</form>