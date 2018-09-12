<!DOCTYPE html>
<html>
<head>
	<title>datos.Ejercicio3</title>
</head>
<body>
<?php
	echo "Textbox 1:  $_GET[texto1] <br>";
	echo "Textbox 2:  $_GET[texto2] <br>";
	echo "Hidden:  $_GET[oculto] <br>";
	echo "Password:   $_GET[clave] <br>";
		if (!isset($_GET['check1'])) {
			echo "check1: No seleccionado <br>";
	 	}else{
			echo "check1: Seleccionado <br>";
		}
		if (!isset($_GET['check2'])) {
			echo "check2: No seleccionado <br>";
	 	}else{
			echo "check2: Seleccionado <br>";
		}
		if (!isset($_GET['check3'])) {
			echo "check3: No seleccionado <br>";
	 	}else{
			echo "check3: Seleccionado <br>";
		}
	echo "Radio Grupo 1: ";
	if (isset($_GET['g1'])) {
    	switch ($_GET['g1']) {
        	case '1':
            	echo "Primer elemento seleccionado<br>";
            break;
        	case '2':
            	echo "Segundo elemento seleccionado<br>";
            break;
        	case '3':
            	echo "Tercer elemento seleccionado<br>";
            break;
    }
	}else{
    echo "No selecciono ningun elemento<br>";
	}
	echo "Radio Grupo 2: ";
	if (isset($_GET['g2'])) {
    	switch ($_GET['g2']) {
        	case 'a':
            	echo "Primer elemento seleccionado<br>";
            break;
        	case 'b':
            	echo "Segundo elemento seleccionado<br>";
            break;
        	case 'c':
            	echo "Tercer elemento seleccionado<br>";
            break;
    }
	}else{
    	echo "No selecciono ningun elemento<br>";
	}
	echo "Lista desplegable:  $_GET[Lista] <br>";
?>
</body>
</html>