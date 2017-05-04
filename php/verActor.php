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
$id=$_GET['idActor'];
$resultado = mysqli_query($conectado,"SELECT * , year(curdate())-year(fecha_nacimiento)+IF(DATE_FORMAT(CURDATE(),'%m-%d') > 
  DATE_FORMAT(fecha_nacimiento,'%m-%d'), 0, -1) AS edad FROM actor WHERE idActor=$id;");   
$linea = mysqli_fetch_array($resultado);  
  $nom=$linea['nombre'];
  $ap=$linea['apellidos'];
  $fecha=$linea['fecha_nacimiento'];
  $nacion=$linea['nacionalidad'];
  $bio=$linea['biografia'];
  $img=$linea['imagen'];
  $edad=$linea['edad'];

function devuelve_personajes($idActor){
  require 'usarBD.php';
  $resultado = mysqli_query($conectado,"SELECT idPersonaje,nombre FROM personaje WHERE idActor=$idActor;");   
  while($linea = mysqli_fetch_array($resultado)){
    $idPers=$linea['idPersonaje'];
    $personaje=$linea['nombre'];
    echo "<p><a style='color:black' href='verPersonaje.php?idPersonaje=$idPers&nombre=$personaje'>$personaje</a></p>";
  } 
}
?>
<div class="contenedor1">
  <div class="contenedor2">
    <div id="nombre">
      <p><?php echo $nom,' ',$ap ?><p>
    </div>
    <div id="foto">  
      <img src="<?php echo $img ?>"></img>  
     </div>
  </div>
  <div class="contenedor3">
    <div id="info">
      <p>NACIONALIDAD:<br /> <?php echo $nacion ?></p>
      <p>FECHA DE NACIMIENTO:<br /> <?php echo $fecha.' ('.($edad).' años)' ?></p>
      <p>BIOGRAFIA:<br /><br /> <?php echo $bio ?></p>
    </div>
    <div id="series">
      <p>PERSONAJES INTERPRETADOS:</P>
      <p><?php devuelve_personajes($id)?></p>
  </div>    
</div>
</body>
</html>