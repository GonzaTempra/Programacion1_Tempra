<?php
echo "<form action='Ejercicio7b.php' method='post'>";
for ($a = 0; $a < $_POST['text1']; $a++){
    echo "<input type='number' name='texto$a'><br>";
}
echo "<input type='submit' value='Enviar'><input type='reset' value='Borrar'></form>";
echo "<form action='ej7.html' method='get'><input type='submit' value='Volver'></form>";
?>