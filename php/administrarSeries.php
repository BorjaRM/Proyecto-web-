<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="fondo.css">
<link rel="stylesheet" type="text/css" href="barrasuperior.css">
<link rel="stylesheet" type="text/css" href="tablasResultados.css">
<title>Administrar Series</title>
</head>
<body>
<?php
// Comprobamos que el usuario se ha autenticado 
if($_SESSION["autenticado"] != "si") { 
  header("Location: index.php"); 
  exit(); // Para asegurar que se finaliza la ejecucion del script
}
include 'barrasuperior.php';
$orden=$_GET['orden'];
?>
<table class="tablaresultados" width="80%">
  <tr>
  <th><a href='administrarSeries.php?orden=titulo'><div>Titulo</div></a></th>
  <th><a href='administrarSeries.php?orden=genero'><div>Genero</div></a></th>
  <th><a href='administrarSeries.php?orden=fecha_lanzamiento'><div>Fecha de lanzamiento</div></a></th>
  <th><a href='administrarSeries.php?orden=temporadas'><div>Temporadas</div></a></th>
  <th colspan="3">Opciones</th>
  </tr>
  <?php
  require 'usarBD.php';
  $consulta= "SELECT idSerie,titulo,genero,fecha_lanzamiento,temporadas FROM serie ORDER BY $orden ASC;";
  $resultado = mysqli_query($conectado,$consulta);   
  while($linea = mysqli_fetch_array($resultado)){
    $id=$linea["idSerie"];
    $titulo=$linea["titulo"];
    echo("<tr><td>".$linea['titulo']."</td>");
    echo("<td>".$linea["genero"]."</td>");
    echo("<td>".$linea["fecha_lanzamiento"]."</td>");
    echo("<td>".$linea["temporadas"]."</td>");
    echo("<td><input class='boton' type='button' onclick='location.href=\"verSerie.php?idSerie=$id.&titulo=$titulo\"' name='ver' id='button2' value='Ver Serie'/></td>");
    echo("<td><input class='boton' type='button' onclick='location.href=\"editarSerie.php?id=$id\"' name='editar' id='button2' value='Editar'/></td>");
    echo("<td><input class='boton' type='button' onclick='location.href=\"borraRegistros.php?tipo=serie&id=$id\"' name='cancelar' id='button2' value='Borrar'/></td></tr>");
  }
  ?>
</table>
</body>
</html>