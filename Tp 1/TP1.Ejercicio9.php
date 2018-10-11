<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 9</title>
</head>
<body>
<table border="1">
	<?php
		$filas=6;
		$columnas=6;
		$x=0;
		for ($i=0; $i < $filas; $i++) { 
			echo "<tr>";
			for ($a=0; $a < $columnas; $a++) { 
				echo "<td>", $x ,"</td>";
				$x++;
			}
			echo "</tr>";
		}
	?>
</table>
</body>
</html>