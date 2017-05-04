<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="fondo.css">
<link rel="stylesheet" type="text/css" href="barrasuperior.css">
<link rel="stylesheet" type="text/css" href="opciones.css">
<title>Opciones</title>
</head>
<body>
<?php
// Comprobamos que el usuario se ha autenticado 
if($_SESSION["autenticado"] != "si") { 
  header("Location: index.php"); 
  exit(); // Para asegurar que se finaliza la ejecucion del script
}
include 'barrasuperior.php';
?>
	<div class="marco2">
		<a href=''>
    	<img src="../img/carga.png" >
    	<p style="color:white">Cargar datos de prueba</p>
    </div>
	<div class="marco2">
		<a href=''>
    	<img src="../img/eliminar.png" >
    	<p style="color:white">Eliminar base de datos</p>
	</div>
</body>
</html>