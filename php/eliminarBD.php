<?php

require("usarBD.php");

$consulta="DROP DATABASE IF EXISTS ".$NOMBRE_BD.";";
$hacerConsulta=mysqli_query($conectado,$consulta);
header('Location: index.php');
?>