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
<title>Administrar Actores</title>
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
    <th><a href='administrarActores.php?orden=nombre'><div>Nombre</div></a></th>
    <th><a href='administrarActores.php?orden=apellidos'><div>Apellidos</div></a></th>
    <th><a href='administrarActores.php?orden=fecha_nacimiento'><div>Fecha de nacimiento</div></a></th>
    <th><a href='administrarActores.php?orden=edad'><div>Edad</div></a></th>
    <th><a href='administrarActores.php?orden=nacionalidad'><div>Nacionalidad</div></a></th>
    <th colspan="3">Opciones</th>
  </tr>
  <?php
  require 'usarBD.php';
  $consulta= "SELECT idActor,nombre,apellidos,fecha_nacimiento,nacionalidad, year(curdate())-year(fecha_nacimiento)+IF(DATE_FORMAT(CURDATE(),'%m-%d') > 
  DATE_FORMAT(fecha_nacimiento,'%m-%d'), 0, -1) AS edad FROM actor ORDER BY $orden ASC;";
  $resultado = mysqli_query($conectado,$consulta);   
  while($linea = mysqli_fetch_array($resultado)){
    $id=$linea["idActor"];
    $nom=$linea["nombre"];
    echo("<tr><td>".$linea['nombre']."</td>");
    echo("<td>".$linea["apellidos"]."</td>");
    echo("<td>".$linea["fecha_nacimiento"]."</td>");
    echo("<td>".$linea["edad"]."</td>");
    echo("<td>".$linea["nacionalidad"]."</td>");
    echo("<td><input class='boton' type='button' onclick='location.href=\"verActor.php?idActor=$id.&nombre=$nom\"' name='ver' id='button2' value='Ver Actor'/></td>");
    echo("<td><input class='boton' type='button' onclick='location.href=\"editarActor.php?id=$id\"' name='editar' id='button2' value='Editar'/></td>");
    echo("<td><input class='boton' type='button' onclick='location.href=\"borraRegistros.php?tipo=actor&id=$id\"' name='cancelar' id='button2' value='Borrar'/></td></tr>");
  }
?>
</table>
</body>
</html>