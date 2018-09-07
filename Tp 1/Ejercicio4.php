<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
<h1>Punto A</h1>
	<?php
		$string="1,2,3,4,5";
		echo "El string contiene: $string";
		$arreglo=explode(",", $string);
		echo "<pre>";
		echo "El arreglo contiene:";
		print_r($arreglo);
		echo "<?pre>";
	?>
<h1>Punto B</h1>
	<?php
		$arreglo=array(1,2,3,4,5);
		echo "<pre>";
		echo "El array contiene:";
		print_r($arreglo);
		echo "<?pre>";
		$string=implode(",", $arreglo);
		echo "El string contiene: $string";
	?>
</body>
</html>