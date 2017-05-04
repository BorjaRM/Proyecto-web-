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
<title>Modificar Actor</title>
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
$resultado=mysqli_query($conectado,"SELECT * FROM actor WHERE idActor=$id;");
$linea=mysqli_fetch_array($resultado);  
$nom=$linea['nombre'];
$ap=$linea['apellidos'];
$fecha=$linea['fecha_nacimiento'];
$nac=$linea['nacionalidad'];
$bio=$linea['biografia'];
$img=$linea['imagen'];
?>
<div id="marco2">
  <form id="form1" name="form1" method="post" action="editarActor2.php?idActor=<?php echo $id ?>">
      <label for="nombre">Nombre<input type="text" name="nombre" id="nombre" value="<?php echo $nom ?>" required/></label>
      <label for="apellidos">Apellidos<input type="text" name="apellidos" id="apellidos" value="<?php echo $ap ?>" required/></label>
      <label for="fecha_nacimiento">Fecha de nacimiento
      <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $fecha ?>" required/></label>
      <label for="nacionalidad">Nacionalidad<input type="text" name="nacionalidad" id="nacionalidad" value="<?php echo $nac ?>" required/></label>
      <label for="img">Foto<input type="text" name="img" id="img" value="<?php echo $img ?>" required/></label>
      <label for="biografia">Biografia
      <br />
      <textarea name="biografia" id="biografia" required><?php echo $bio ?></textarea></label>
      <input class="boton" type="submit" name="enviar" id="button" value="Modificar">
      <input class="boton" type="button" onclick="location.href='administrarActores.php?orden=nombre'" name="cancelar" id="button2" value="Cancelar"/>
  </form>
</div>
</body>
</html>