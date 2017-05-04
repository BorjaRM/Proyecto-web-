<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="fondo.css">
<link rel="stylesheet" type="text/css" href="barrasuperior.css">
<link rel="stylesheet" type="text/css" href="presentacionActores.css">
<title>Actores</title>
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
  $consulta = "SELECT count(*) AS n_actores FROM actor";   
  $resultado = mysqli_query($conectado,$consulta);
  $lineas = mysqli_fetch_array($resultado);
  $n_actores = $lineas['n_actores'];
  if($n_actores > 0){
    $consulta = "SELECT concat(apellidos,\", \",nombre) as nombre_completo, imagen,idActor FROM actor  ORDER BY nombre_completo ASC";   
    $resultado = mysqli_query($conectado,$consulta);
    while($linea = mysqli_fetch_array($resultado)){
      $id=$linea['idActor'];
      $nom=$linea['nombre_completo'];
      $img=$linea['imagen'];
      echo "<div class=\"pelicula\">
            <a href='verActor.php?idActor=$id.&nombre=$nom'>
              <img src=".$img." >
              <div class=\"titulo\">
                <p style=\"color:white\">".$nom."</p>
              </div>
            </div>";
    }
  }
}
?>
</div> 
</body>
</html>