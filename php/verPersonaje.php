<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="fondo.css">
<link rel="stylesheet" type="text/css" href="infoActor.css">
<link rel="stylesheet" type="text/css" href="barrasuperior.css">
<title><?php echo $_GET['nombre'] ?></title>
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
$id=$_GET['idPersonaje'];
$resultado = mysqli_query($conectado,"SELECT * FROM personaje WHERE idPersonaje=$id;");   
$linea = mysqli_fetch_array($resultado);  
  $nom=$linea['nombre'];
  $des=$linea['descripcion'];
  $idActor=$linea['idActor'];
  $idSerie=$linea['idSerie'];
  $img=$linea['imagen'];

function devuelve_serie($idSerie){
  require 'usarBD.php';
  $resultado = mysqli_query($conectado,"SELECT idSerie,titulo FROM serie WHERE idSerie=$idSerie;");   
  while($linea = mysqli_fetch_array($resultado)){
    $idSerie=$linea['idSerie'];
    $titulo=$linea['titulo'];
    echo "<p><a style='color:black' href='verSerie.php?idSerie=$idSerie&titulo=$titulo'>$titulo</a></p>";
  } 
}
?>
<div class="contenedor1">
  <div class="contenedor2">
    <div id="nombre">
      <p><?php echo $nom?><p>
    </div>
    <div id="foto">  
      <img src="<?php echo $img ?>"></img>  
     </div>
  </div>
  <div class="contenedor3">
    <div id="info">
      <p>DESCRIPCION:<br /><br /> <?php echo $des ?></p>
    </div>
    <div id="series">
      <p>SERIES EN LAS QUE APARECE:</p>
      <p><?php devuelve_serie($idSerie)?></p>
  </div>    
</div>
</body>
</html>