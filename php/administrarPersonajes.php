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
<title>Administrar Personajes</title>
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
  <th><a href='administrarPersonajes.php?orden=p.nombre'><div>Nombre</div></a></th>
  <th><a href='administrarPersonajes.php?orden=a.nombre'><div>Interprete</div></a></th>
  <th><a href='administrarPersonajes.php?orden=s.titulo'><div>Serie</div></a></th>
  <th colspan="3">Opciones</th>
  </tr>
  <?php
  require 'usarBD.php';
  $consulta= "SELECT p.idPersonaje,p.nombre,concat(a.nombre,' ',a.apellidos) as actor,s.titulo as serie FROM ((personaje AS p INNER JOIN actor AS a ON p.idActor=a.idActor) INNER JOIN serie AS s ON p.idSerie=s.idSerie) ORDER BY $orden ASC;";  
  $resultado = mysqli_query($conectado,$consulta);   
  while($linea = mysqli_fetch_array($resultado)){
    $id=$linea["idPersonaje"];
    $nom=$linea["nombre"];
    echo("<tr><td>".$linea['nombre']."</td>");
    echo("<td>".$linea["actor"]."</td>");
    echo("<td>".$linea["serie"]."</td>");
    echo("<td><input class='boton' type='button' onclick='location.href=\"verPersonaje.php?idPersonaje=$id&nombre=$nom\"' name='ver' id='button2' value='Ver Personaje'/></td>");
    echo("<td><input class='boton' type='button' onclick='location.href=\"editarPersonaje.php?id=$id\"' name='editar' id='button2' value='Editar'/></td>");
    echo("<td><input class='boton' type='button' onclick='location.href=\"borraRegistros.php?tipo=personaje&id=$id\"' name='cancelar' id='button2' value='Borrar'/></td></tr>");
  }
  ?>
</table>
</body>
</html>