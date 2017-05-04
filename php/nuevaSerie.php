<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="formularios.css" />
<link rel="stylesheet" type="text/css" href="barrasuperior.css" />
<link rel="stylesheet" type="text/css" href="fondo.css" />
<title>Añadir Serie</title>
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
<div id="marco2">
  <form id="form1" name="form1" method="post" action="nuevaSerie.php">
      <label for="titulo">Titulo<input type="text" name="titulo" id="titulo" placeholder="titulo" required/></label>
      <label for="genero">Género<input type="text" name="genero" id="genero" placeholder="genero" required/></label>
      <label for="fecha_lanzamiento">Fecha de lanzamiento
        <input type="text" name="fecha_lanzamiento" id="fecha_lanzamiento" placeholder="aaaa-mm-dd" required/></label>
      <label for="temporadas">Temporadas<input type="text" name="temporadas" id="temporadas" placeholder="temporadas" required/></label>
      <label for="img">URL imagen<input type="text" name="img" id="img" placeholder="ruta de la imagen" required/></label>
      <label for="trailer">URL trailer<input type="text" name="trailer" id="trailer" placeholder="ruta del trailer" required/></label>
      <label for="sinopsis">Sinopsis
      <br />
      <textarea name="sinopsis" id="sinopsis" placeholder="describa brevemente la serie..." maxlength="1000" required></textarea></label>
      <input class="boton" type="submit" name="enviar" id="button" value="Añadir Serie">
      <input class="boton" type="button" onclick="location.href='verSeries.php'" name="cancelar" id="button2" value="Cancelar"/>
  </form>
</div>
<?php
if(isset($_POST['enviar'])){ // Si el usuario ha hecho click en Enviar
  $tit=$_POST['titulo'];
  $gen=$_POST['genero'];
  $fecha=$_POST['fecha_lanzamiento'];
  $temp=$_POST['temporadas'];
  $s=$_POST['sinopsis'];
  $img=$_POST['img'];
  $trailer=$_POST['trailer'];
  require 'usarBD.php';
  mysqli_query($conectado,"INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
    VALUES ('$tit','$gen','$fecha','$temp','$s','$img','$trailer');")or die(mysqli_error($conectado)."  ".mysqli_errno($conectado));
}
?>
</body>
</html>