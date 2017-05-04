<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="formularios.css">
<link rel="stylesheet" type="text/css" href="fondo.css" />
<link rel="stylesheet" type="text/css" href="barrasuperior.css" />
<title>Borrar registros</title>
</head>
<body>
<?php
// Comprobamos que el usuario se ha autenticado 
if($_SESSION["autenticado"] != "si") { 
  header("Location: index.php"); 
  exit(); // Para asegurar que se finaliza la ejecucion del script
}
include 'barrasuperior.php';
require 'usarBD.php';
$tipo = $_GET['tipo'];
$id = $_GET['id'];

switch($tipo){
	case 'serie': $href="administrarSeries.php?orden=titulo"; break;
	case 'personaje': $href="administrarPersonajes.php?orden=p.nombre"; break;
	case 'actor': $href="administrarActores.php?orden=nombre"; break;
}
if(isset($_POST['borrar'])){ // Si el usuario ha hecho click en Borrar
	$consulta= "DELETE FROM $tipo WHERE id".$tipo."=$id;";
	mysqli_query($conectado, $consulta);
	header("Location: $href"); 
}
?>
<div id="marco">
<form id="form1" name="form1" method="post" action="borraRegistros.php?tipo=<?php echo($tipo) ?>&id=<?php echo($id) ?>">
  Confirma que desea eliminar el registro:<p></p>
    <input class="boton" type="submit" name="borrar" id="button" value="BORRAR" />
    <input class="boton" type="button" onclick="location.href='<?php echo($href) ?>'" name="cancelar" id="button2" value="CANCELAR" />
</form>
</div>
</body>
</html>