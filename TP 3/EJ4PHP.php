<form action="TP3.Ejercicio4.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>
<?php
function copiar(){
        copy($_FILES['imagen']['tmp_name'], 'importados/'.$_FILES['imagen']['name']);
        echo "<h1>Galeria:</h1><br>";
        $arreglo = scandir('importados');
        unset($arreglo[0],$arreglo[1]);
        foreach ($arreglo as $value){
            echo "<h3>".$value."</h3><br><img src='importados/".$value."' width='120px' height='120px'><br>";
        }
}
echo "<h1>Ejercicio 4</h1>";
if (empty($_FILES['imagen']['name'] && $_FILES['imagen']['type']=="image/jpeg" || $_FILES['imagen']['type']=="image/png" )) {
    echo "<h3>ERROR: ¡No se selecciono imagen o el formato es incorrecto (JPEG o PNG)</h3>";
}else {
    if (file_exists('importados')) {
        copiar();
    } else {
        mkdir('importados');
        copiar();
    }
}
?>