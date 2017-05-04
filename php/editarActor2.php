<?php
$idActor=$_GET['idActor'];
$nom=$_POST['nombre'];
$ap=$_POST['apellidos'];
$fecha=$_POST['fecha_nacimiento'];
$nacion=$_POST['nacionalidad'];
$foto=$_POST['img'];
$bio=$_POST['biografia'];

require 'usarBD.php';
$resultado = mysqli_query($conectado,"UPDATE actor SET nombre='$nom',apellidos='$ap',fecha_nacimiento='$fecha',nacionalidad='$nacion',biografia='$bio',
	imagen='$foto' WHERE idActor=$idActor;")or die(mysqli_error($conectado)."  ".mysqli_errno($conectado));

if($conectado){
  header("Location: administrarActores.php?orden=nombre"); 
}else{
  header("Location: editarActor.php?id=$idActor"); 
}
?>