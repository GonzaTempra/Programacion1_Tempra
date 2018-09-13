<?php
echo "<form action='Ejercicio7b.php' method='post'>";
$b=5;
if ($_POST['numero']< $b ) {
	$_POST['numero']=$b;
}
for ($a = 0; $a < $_POST['numero']; $a++){
	$c=$a+1;
    echo "$c <input type='number' name='texto$a'><br>";
}
echo "<input type='submit' value='Enviar'><input type='reset' value='Borrar'></form>";
echo "<form action='ej7.html' method='get'><input type='submit' value='Volver'></form>";
?>