<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="fondo.css">
<link rel="stylesheet" type="text/css" href="barrasuperior.css">
<link rel="stylesheet" type="text/css" href="infoSerie.css">
<title><?php echo $_GET['titulo'] ?></title>
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
$id=$_GET['idSerie'];
$resultado = mysqli_query($conectado,"SELECT * FROM serie WHERE idSerie=$id;");   
$linea = mysqli_fetch_array($resultado);  
  $tit=$linea['titulo'];
  $gen=$linea['genero'];
  $fecha=$linea['fecha_lanzamiento'];
  $temp=$linea['temporadas'];
  $s=$linea['sinopsis'];
  $img=$linea['imagen'];
  $trailer=$linea['trailer'];

function devuelve_personajes($idSerie){
  require 'usarBD.php';
  $resultado = mysqli_query($conectado,"SELECT idPersonaje,nombre FROM personaje WHERE idSerie=$idSerie ORDER BY nombre ASC;");   
  while($linea = mysqli_fetch_array($resultado)){
    $idPers=$linea['idPersonaje'];
    $personaje=$linea['nombre'];
    echo "<p><a style='color:black' href='verPersonaje.php?idPersonaje=$idPers&nombre=$personaje'>$personaje</a></p>";
  } 
}
?>

<div class="contenedor1">
	<div class="contenedor2">
		<div id="info">
			<p><?php echo $tit ?><p>
		</div>
		<div id="trailer">		
			 <iframe width="100%" height="350" src="<?php echo $trailer ?>"  allowfullscreen></iframe>
		 </div>
	</div>
	<div class="contenedor3">
		<div id="sinopsis">
      <p>GENERO: <?php echo $gen ?></p>
      <p>FECHA DE ESTRENO: <?php echo $fecha ?></p>
      <p>TEMPORADAS: <?php echo $temp ?></p>
			<p>SINOPSIS: </p><p><?php echo $s ?></p>
		</div>
		<div id="actores">
      <p>PERSONAJES:</p>
			<p><?php devuelve_personajes($id) ?><p>
		</div>
	</div>		
</div>
</body>
</html>