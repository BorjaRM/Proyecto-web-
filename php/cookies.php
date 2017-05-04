<?php
//La creacion de las cookies debe ir al principio del archivo
if(isset($_POST["opcion"])){
	setcookie("user",$_POST['usuario'],time()+60*60*24*365,"/"); //ruta, si ponemos una contrabarra se puede leer desde cualquier sitio
	setcookie("pass",$_POST['pass'],time()+60*60*24*365,"/");
}else{
	setcookie("user",$_POST['usuario'],time()-1000,"/");
	setcookie("pass",$_POST['pass'],time()-1000,"/");
}
?>