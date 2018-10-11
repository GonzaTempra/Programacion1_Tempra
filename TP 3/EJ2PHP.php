<?php
if (empty($_FILES['archivo']['name'])) {
    echo "<h2>(!) No ingreso ningun archivo</h2>";
}else {
    echo '<table border="2">';
    $archivo = fopen($_FILES['archivo']['tmp_name'], "r");
    $num_filas = 0;
    while (!feof($archivo) && $num_filas < 100) {
        $num_filas += 1;
        $data = fgets($archivo);
        echo "<tr><td>" . str_replace(';', '</td><td>', $data) . '</td></tr>';
    }
    echo '</table>';
    fclose($archivo);
}
?>
<form action="TP3.Ejercicio2.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>