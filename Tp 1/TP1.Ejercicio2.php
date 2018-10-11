<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
<h1>Punto A</h1>
	<?php
		$array=[1,2,3,4,5];
		echo "<pre>";
		echo "El arreglo vectorial simple contiene: \n";
		print_r($array);
		echo "</pre>";
	?>
<h1>Punto B</h1>
	<?php
		$arra['CPU']="Intel i5 4460";
		$arra['GPU']="Asus GTX 1060 6gb";
		$arra['MB']="MSI h81m-p33";
		$arra['PSU']="EVGA 600W";
		$arra['RAM']="Hyperx 8gb 1600Mhz";
		$arra['Almacenamiento']= "WD 1tb Blue";
		$arra['precio']="$22000";
		echo "<pre>";
		echo "El arreglo asociativo simple contiene: \n";
		print_r($arra);
		echo "</pre>";
	?>
<h1>Punto C</h1>
	<?php
		$arra3d=array(
			0=>array(1,2,3),
			1=>array(4,5,6),
		);
		echo "<pre>";
		echo "El arreglo vectorial de 3 dimensiones contiene:\n";
		print_r($arra3d);
		echo "</pre>";
	?>
<h1>Punto D</h1>
	<?php
		$arra2d=array(
			"Datos Alumno"=>array("Nombre:Gonzalo Tempra","Legajo:23245"),
			"Inscripciones"=>array("Algebra","Programacion"),
			"Notas"=>array("9","10"),
		);
		echo "<pre>";
		echo "El arreglo asociativo de 2 dimensiones contiene:\n";
		print_r($arra2d);
		echo "</pre>";
	?>	
</body>
</html>