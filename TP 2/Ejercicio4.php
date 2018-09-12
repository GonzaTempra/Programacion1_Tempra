<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4 php</title>
</head>
<body>
<?php
	if (isset($_GET['Nombre'])) {
		foreach ($_GET as $key => $value) {
			echo $key . ":" . $value  .  "<br>";
		}
	}else{
		echo "No se recibieron datos";
	}
?>
<form action="Ejercicio 4.html">
	<input type="submit" name="volver" value="volver">	
</form>
</body>
</html>