<?php
$id=$_GET['idPersonaje'];
$nom=$_POST['nombre'];
$des=$_POST['descripcion'];
$actor=$_POST['actores'];
$serie=$_POST['series'];
$img=$_POST['img'];
require 'usarBD.php';

// Obtenemos el id del actor seleccionado
$resultado = mysqli_query($conectado,"SELECT idActor FROM actor WHERE concat(apellidos,', ',nombre)='$actor';");
$linea=mysqli_fetch_array($resultado);
$actor=$linea['idActor'];

// Obtenemos el id de la serie seleccionada
$resultado = mysqli_query($conectado,"SELECT idSerie FROM serie WHERE titulo='$serie';");
$linea=mysqli_fetch_array($resultado);
$serie=$linea['idSerie'];

// Realizamos la modificacion
$resultado = mysqli_query($conectado,"UPDATE Personaje SET nombre='$nom',descripcion='$des',idActor='$actor',idSerie='$serie',imagen='$img'
	WHERE idPersonaje=$id;")or die(mysqli_error($conectado)."  ".mysqli_errno($conectado));

if($conectado){
  header("Location: administrarPersonajes.php?orden=p.nombre"); 
}else{
  header("Location: editarPersonaje.php?id=$id"); 
}
?>