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
<title>Añadir Personaje</title>
</head>
<body>
<?php
// Comprobamos que el usuario se ha autenticado 
if($_SESSION["autenticado"] != "si") { 
  header("Location: index.php"); 
  exit(); // Para asegurar que se finaliza la ejecucion del script
}
include 'barrasuperior.php';

function opciones_titulo(){
  require 'usarBD.php';
  $consulta="SELECT titulo FROM serie ORDER BY titulo ASC";
  $resultado=mysqli_query($conectado,$consulta);
  return $resultado;
}

function opciones_actor(){
  require 'usarBD.php';
  $consulta="SELECT concat(apellidos,\", \",nombre) as nombre_completo FROM actor ORDER BY nombre_completo ASC;";
  $resultado=mysqli_query($conectado,$consulta);
  return $resultado;
}

function devuelve_idactor($nombre_completo){
  require 'usarBD.php';
  $consulta="SELECT idActor FROM actor WHERE concat(apellidos,\", \",nombre)='$nombre_completo';";
  $resultado = mysqli_query($conectado,$consulta);
  $linea = mysqli_fetch_array($resultado);
  $id_actor=$linea['idActor'];
  return $id_actor;
}

function devuelve_idserie($serie){
  require 'usarBD.php';
  $consulta="SELECT idSerie FROM serie WHERE titulo='$serie';";
  $resultado = mysqli_query($conectado,$consulta);
  $linea = mysqli_fetch_array($resultado);
  $id_serie=$linea['idSerie'];
  return $id_serie;
}

if(isset($_POST['enviar2'])){ // Si el usuario ha hecho click en Enviar
  $nom=$_POST['nombre'];
  $desc=$_POST['descripcion'];
  $img=$_POST['img'];
  $id_actor=devuelve_idactor($_POST['actores']);
  $id_serie=devuelve_idserie($_POST['series']);
  require 'usarBD.php';
  mysqli_query($conectado,"INSERT INTO PERSONAJE (nombre,descripcion,idActor,idSerie,imagen) VALUES ('$nom','$desc','$id_actor','$id_serie','$img');")
  or die(mysqli_error($conectado)."  ".mysqli_errno($conectado));
}
?>

<div id="marco2">
  <form id="form1" name="form1" method="post" action="nuevoPersonaje.php">
      <label for="nombre">Nombre<input type="text" name="nombre" id="nombre" placeholder="nombre" required/></label>
      <label for="series">Serie en la que aparece:</label>
      <select name="series" id="series">
      <?php
        $resultado = opciones_titulo();
        while($row=mysqli_fetch_array($resultado)){
        echo ("<option value=\"".$row['titulo']."\">".$row['titulo']."</option>");
        }
      ?>
      </select>
      <label for="actores">Actor que lo interpreta:</label>
      <select name="actores" id="actores">
      <?php
        $resultado = opciones_actor();
        while($row=mysqli_fetch_array($resultado)){
        echo ("<option value=\"".$row['nombre_completo']."\">".$row['nombre_completo']."</option>");
        }
      ?>
      </select>
      <label for="descripcion">Descripción
      <br />
      <textarea name="descripcion" id="descripcion" placeholder="describa brevemente el personaje..." required></textarea></label>
      <label for="img">URL imagen<input type="text" name="img" id="img" placeholder="url imagen del personaje" required/></label>
      <input class="boton" type="submit" name="enviar2" id="button" value="Añadir Personaje">
      <input class="boton" type="button" onclick="location.href='verPersonajes.php'" name="cancelar" id="button2" value="Cancelar"/>
  </form>
</div>
</body>
</html>