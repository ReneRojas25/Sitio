<html>
<head>
<title> Datos </title>
</head>
<br>
<body>
	<?php
	echo "El nombre ingresado es: ";
	echo $_REQUEST ['nombre'];
	if ($_REQUEST['estudios'] == "Notiene"){
	echo "El tipo de estudios que posee es: ";
	}
	if ($_REQUEST['estudios'] == "CECyTEH"){
	echo "Estudio en CECyTEH";
	}
	else{
		if ($_REQUEST['estudios'] == "COBAEH"){
	echo "Estudio en un COBAEH";
	}
		}
	?>
</body>
</html>