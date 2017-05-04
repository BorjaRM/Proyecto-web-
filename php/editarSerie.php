<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="formularios.css" />
<link rel="stylesheet" type="text/css" href="fondo.css" />
<link rel="stylesheet" type="text/css" href="barrasuperior.css" />
<title>Modificar Serie</title>
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
$id=$_GET['id'];
$resultado=mysqli_query($conectado,"SELECT * FROM serie WHERE idSerie=$id;");
$linea=mysqli_fetch_array($resultado);  
$tit=$linea['titulo'];
$gen=$linea['genero'];
$fecha=$linea['fecha_lanzamiento'];
$temp=$linea['temporadas'];
$s=$linea['sinopsis'];
$img=$linea['imagen'];
$trailer=$linea['trailer'];
?>
<div id="marco2">
  <form id="form1" name="form1" method="post" action="editarSerie2.php?idSerie=<?php echo $id ?>">
      <label for="titulo">Titulo<input type="text" name="titulo" id="titulo" value="<?php echo $tit ?>" required/></label>
      <label for="genero">Género<input type="text" name="genero" id="genero" value="<?php echo $gen ?>" required/></label>
      <label for="fecha_lanzamiento">Fecha de lanzamiento
        <input type="text" name="fecha_lanzamiento" id="fecha_lanzamiento" value="<?php echo $fecha ?>" required/></label>
      <label for="temporadas">Temporadas<input type="text" name="temporadas" id="temporadas" value="<?php echo $temp ?>" required/></label>
      <label for="img">URL imagen<input type="text" name="img" id="img" value="<?php echo $img ?>" required/></label>
      <label for="trailer">URL trailer<input type="text" name="trailer" id="trailer" value="<?php echo $trailer ?>" required/></label>
      <label for="sinopsis">Sinopsis
      <br />
      <textarea name="sinopsis" id="sinopsis" required><?php echo $s ?></textarea></label>
      <input class="boton" type="submit" name="enviar" id="button" value="Modificar">
      <input class="boton" type="button" onclick="location.href='administrarSeries.php?orden=titulo'" name="cancelar" id="button2" value="Cancelar"/>
  </form>
</div>
</body>
</html>