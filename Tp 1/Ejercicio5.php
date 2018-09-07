<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
<h1>Ejercicio 5</h1>
	<?php
		$arreglo=array();
		$x=rand(5,15);
		while ($x < 15) {
    		$siguiente_num_aleatorio =rand(1,100);
    		if(in_array($siguiente_num_aleatorio, $arreglo)){
        	continue;
    		}
    		else {
    			array_push($arreglo, $siguiente_num_aleatorio);
    			$x++;
    			}
    	}

    	echo "A)  Numero de elementos en array: ".count($arreglo);
		echo "<br> B)  Los valores aleatorios son: ";
		echo "<pre>";
		print_r($arreglo);
		echo "<?pre>";
		echo "<br> C) Valor maximo: ",max($arreglo) ,"<br>    Valor minimo: ",min($arreglo);
		$promedio=array_sum($arreglo)/count($arreglo);
		echo "<br><br> D) El valor promedio es: $promedio";
		if (in_array(20, $arreglo)) {
			echo "<br><br> E) El valor 20 se encuentra en el array";
		}else echo "<br><br> E) El valor 20 NO se encuentra en el array";
	?>
</body>
</html>