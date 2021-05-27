<html>
<head>
<title> Datos </title>
</head>
<br>
<body>
	<?php
	echo "La persona: ";
	echo $_REQUEST ['nombre'];
	if ($_REQUEST['estudios'] == "Notiene") {
			echo " no cuenta con estudios";
	}
	if ($_REQUEST['estudios'] == "CECyTEH"){
			echo " cuenta con estudios en CECyTEH";
	}
	else{
		if ($_REQUEST['estudios'] == "COBAEH"){
			echo  " cuenta con estudios en un COBAEH";
	}
		}
	?>
</body>
</html>