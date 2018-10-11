<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
<h1>Ejercicio 6</h1>
	<?php
		$arreglo=array();
		for ($i=0; $i < 15; $i++) { 
			$num_aleatorio=rand(1,50);
			array_push($arreglo, $num_aleatorio);
		}
		$arreglo2= array_unique($arreglo);

		echo "<pre>";
		echo "El arreglo original contiene: \n ";
		print_r($arreglo);
		echo "<br> El arreglo sacando duplicados contiene: \n ";
		print_r($arreglo2);
		echo "<?pre>";
	?>
</body>
</html>