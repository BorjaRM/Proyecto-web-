<?php
$idSerie=$_GET['idSerie'];
$tit=$_POST['titulo'];
$gen=$_POST['genero'];
$fecha=$_POST['fecha_lanzamiento'];
$temp=$_POST['temporadas'];
$s=$_POST['sinopsis'];
$img=$_POST['img'];
$trailer=$_POST['trailer'];

require 'usarBD.php';
$resultado = mysqli_query($conectado,"UPDATE serie SET titulo='$tit',genero='$gen',fecha_lanzamiento='$fecha',temporadas='$temp',sinopsis='$s',imagen='$img',trailer='$trailer' WHERE idSerie=$idSerie;")
  or die(mysqli_error($conectado)."  ".mysqli_errno($conectado));

if($conectado){
  header("Location: administrarSeries.php?orden=titulo"); 
}else{
  header("Location: editarSerie.php?id=$idSerie"); 
}
?>