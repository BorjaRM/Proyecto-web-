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
<title>Modificar Personaje</title>
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

function opciones_titulo(){
  require 'usarBD.php';
  $consulta="SELECT idSerie,titulo FROM serie ORDER BY titulo ASC";
  $resultado=mysqli_query($conectado,$consulta);
  return $resultado;
}

function opciones_actor(){
  require 'usarBD.php';
  $consulta="SELECT idActor,concat(apellidos,\", \",nombre) as nombre_completo FROM actor ORDER BY nombre_completo ASC;";
  $resultado=mysqli_query($conectado,$consulta);
  return $resultado;
}

$id=$_GET['id'];
$resultado=mysqli_query($conectado,"SELECT * FROM personaje WHERE idPersonaje=$id;");
$linea=mysqli_fetch_array($resultado);  
$nom=$linea['nombre'];
$des=$linea['descripcion'];
$actor=$linea['idActor'];
$serie=$linea['idSerie'];
$img=$linea['imagen'];
?>
<div id="marco2">
  <form id="form1" name="form1" method="post" action="editarPersonaje2.php?idPersonaje=<?php echo $id ?>">
      <label for="nombre">Nombre<input type="text" name="nombre" id="nombre" value="<?php echo $nom ?>" required/></label>
      <label for="series">Serie en la que aparece:</label>
      <select name="series" id="series">
      <?php
        $resultado = opciones_titulo();
        while($row=mysqli_fetch_array($resultado)){ // Imprime todos los resultados dentro del desplegable
        echo ("<option value=\"".$row['titulo']."\">".$row['titulo']."</option>");
			if($row['idSerie'] == $serie){ // Establece el valor inicial
	        	echo ("<option value=\"".$row['titulo']."\" selected>".$row['titulo']."</option>");
	        }
        }
      ?>
      </select>
      <label for="actores">Actor que lo interpreta:</label>
      <select name="actores" id="actores">
      <?php
        $resultado = opciones_actor();
        while($row=mysqli_fetch_array($resultado)){
        echo ("<option value=\"".$row['nombre_completo']."\">".$row['nombre_completo']."</option>");
        	if($row['idActor'] == $actor){
        		echo ("<option value=\"".$row['nombre_completo']."\" selected>".$row['nombre_completo']."</option>");
	        }
        }
      ?>
      </select>
      <label for="descripcion">Descripción
      <br />
      <textarea name="descripcion" id="descripcion" required><?php echo $des ?></textarea></label>
      <label for="img">URL imagen<input type="text" name="img" id="img" value="<?php echo $img ?>" required/></label>
      <input class="boton" type="submit" name="enviar2" id="button" value="Modificar Personaje">
      <input class="boton" type="button" onclick="location.href='administrarPersonajes.php?orden=p.nombre'" name="cancelar" id="button2" value="Cancelar"/>
  </form>
</div>
</body>
</html>