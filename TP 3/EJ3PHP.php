<form action="TP3.Ejercicio3.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>

<?php
function mostrar(){
    $archivo = fopen('importados/'.$_FILES['archivo']['name'], "r");
    while ($linea = fgets($archivo)) {
        echo $linea . "<br>";
    }
    fclose($archivo);
}
echo "<h2>Ejercicio 3</h2>";
if (empty($_FILES['archivo']['name'])) {
    echo "<h3>ERROR: ¡No ingreso ningun archivo!</h3>";
}else {
    if (file_exists('importados')) {
        echo "<h3>Archivo copiado al directorio: importados</h3><br>";
            copy($_FILES['archivo']['tmp_name'], 'importados/' . $_FILES['archivo']['name']);
        echo "<h3>Contenido del Archivo:</h3><br>";
        mostrar();
    } else {
        mkdir('importados');
        echo "<h3>Archivo copiado al directorio: importados</h3><br>";
            copy($_FILES['archivo']['tmp_name'], 'importados/' . $_FILES['archivo']['name']);
        echo "<h3>Contenido del Archivo:</h3><br>";
        mostrar();
    }
}
?>
