<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
<form action="datos.Ejercicio3.php" method="get">
	Textbox:<input type="text" name="texto1">   <input type="text" name="texto2"><br>
	Hidden:<input type="hidden" name="oculto"><br>
	Password:<input type="password" name="clave"><br>
	Checkbox:
	<input type="checkbox" name="check[1]" value="Seleccionado"> 
	<input type="checkbox" name="check[2]" value="Seleccionado">  
	<input type="checkbox" name="check[3]" value="Seleccionado"><br>
	<p>
		Radio grupo 1:<br>
		<input type="Radio" name="1" value="1">
		<input type="Radio" name="1" value="2">
		<input type="Radio" name="1" value="3">
    </p>
    <p>
    	Radio grupo 2:<br>
    	<input type="Radio" name="2" value="a">
    	<input type="Radio" name="2" value="b">
    	<input type="Radio" name="2" value="c">
    </p> 
	Lista desplegable:
	<select name="Lista">
		<option value="Opcion 1">Opcion 1</option>
		<option value="Opcion 2">Opcion 2</option>
		<option value="Opcion 3">Opcion 3</option>
		<option value="Opcion 4">Opcion 4</option>
	</select><br>
	<input type="submit" name="Enviar">

</form>
</body>
</html>