
<?php
echo "<h1>Contenido:</h1><br>";
if (empty($_FILES['archivo']['name'])) {
    echo "<h2>(!) Archivo no encontrado</h2>";
}else{
    $archivo = fopen($_FILES['archivo']['tmp_name'], "r");
    while ($linea = fgets($archivo)) {
        echo $linea . "<br>";
    }
    fclose($archivo);
}
?>
<form action="TP3.Ejercicio1.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>