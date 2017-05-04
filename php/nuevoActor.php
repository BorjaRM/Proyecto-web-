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
<title>Añadir Actor</title>
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
  <form id="form1" name="form1" method="post" action="nuevoActor.php">
      <?php if (isset($_GET['datoserroneos'])) if ($_GET["datoserroneos"]=="si") echo("<p class='error'>Ya existe un actor/actriz con ese nombre</p>");?>
      <label for="nombre">Nombre<input type="text" name="nombre" id="nombre" placeholder="nombre" required/></label>
      <label for="apellidos">Apellidos<input type="text" name="apellidos" id="apellidos" placeholder="apellidos" required/></label>
      <label for="fecha_nacimiento">Fecha de nacimiento
      <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="aaaa-mm-dd" required/></label>
      <label for="nacionalidad">Nacionalidad<input type="text" name="nacionalidad" id="nacionalidad" placeholder="nacionalidad" required/></label>
      <label for="img">Foto<input type="text" name="img" id="img" placeholder="ruta de la imagen" required/></label>
      <label for="biografia">Biografia
      <br />
      <textarea name="biografia" id="biografia" placeholder="describa brevemente al actor..." required></textarea></label>
      <input class="boton" type="submit" name="enviar" id="button" value="Añadir Actor">
      <input class="boton" type="button" onclick="location.href='verActores.php'" name="cancelar" id="button2" value="Cancelar"/>
  </form>
</div>
<?php
if(isset($_POST['enviar'])){ // Si el usuario ha hecho click en Enviar
  $nom=$_POST['nombre'];
  $ap=$_POST['apellidos'];
  $fecha=$_POST['fecha_nacimiento'];
  $nacion=$_POST['nacionalidad'];
  $foto=$_POST['img'];
  $bio=$_POST['biografia'];
  require 'usarBD.php';
  $resultado = mysqli_query($conectado,"SELECT nombre,apellidos FROM ACTOR WHERE nombre='$nom' AND apellidos='$ap';");
  if(mysqli_num_rows($resultado) == 0){
    mysqli_query($conectado,"INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
      VALUES ('$nom','$ap','$fecha','$nacion','$bio','$foto');")or die(mysqli_error($conectado)."  ".mysqli_errno($conectado));
  }else{
    header ("Location: nuevoActor.php?datoserroneos=si");
  }
}
?>
</body>
</html>