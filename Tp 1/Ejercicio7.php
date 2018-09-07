<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>
<h1>Ejercicio 7</h1>
	<?php
	$arreglo=array();
	for ($i=0; $i < 15 ; $i++) { 
		$numero=rand(1,30);
		array_push($arreglo, $numero);
	}
	echo "<pre>";
	echo "El arreglo sin ordenar:  \n";
	print_r($arreglo);
	sort($arreglo); 
	echo "<br> A) Ordenado de menor a mayor: ";
	print_r($arreglo);
	echo "<?pre>";
	echo "<br> B) Dividido en dos:  ";
	print_r(array_chunk($arreglo, ceil(count($arreglo)/2)))
	?>
</body>
</html>