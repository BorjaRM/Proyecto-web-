<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="fondo.css">
<link rel="stylesheet" type="text/css" href="barrasuperior.css">
<link rel="stylesheet" type="text/css" href="presentacionSeries.css">
<title>Series</title>
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
<div class="cuadricula">
<?php crea_cuadricula(); 

function crea_cuadricula(){
  require 'usarBD.php';
  $consulta = "SELECT count(*) AS n_series FROM serie";   
  $resultado = mysqli_query($conectado,$consulta);
  $lineas = mysqli_fetch_array($resultado);
  $n_series = $lineas['n_series'];
  if($n_series > 0){
    $consulta = "SELECT idSerie,titulo,imagen FROM serie ORDER BY titulo ASC";   
    $resultado = mysqli_query($conectado,$consulta);
    while($linea = mysqli_fetch_array($resultado)){
      $id=$linea['idSerie'];
      $titulo=$linea['titulo'];
      $imagen=$linea['imagen'];
      echo "<div class='pelicula'>
            <a href='verSerie.php?idSerie=$id.&titulo=$titulo'>
              <img src=".$imagen." >
              <div class='titulo'>
                <p style='color:white'>".$titulo."</p>
              </div>
            </div>";
    }
  }
}
?>
</div> 
</body>
</html>