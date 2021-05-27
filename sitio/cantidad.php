<!DOCTYPE html>
<html>
<head>
	<title>Cantidad de deportes</title>
</head>
<body>
	<?php
  $cantidad = 0;
  if (isset($_REQUEST['futbol'])) {
    $cantidad++;
  }
  if (isset($_REQUEST['basquet'])) {
    $cantidad++;
  }
  if (isset($_REQUEST['tenis'])) {
    $cantidad++;
  }
  if (isset($_REQUEST['volei'])) {
    $cantidad++;
  }
  echo "Para el usuario ";
  echo $_REQUEST['nombre'];
  echo ", el número de deportes que practica es: $cantidad .";
  ?>
</body>
</html>