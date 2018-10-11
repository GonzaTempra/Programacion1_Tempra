<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 8</title>
</head>
<body>
	<?php
	$filas=5;
	$columnas=5;
	$x=0;
	?>
<h1>Ejercicio 8</h1>
	<table border="1">
		<?php
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