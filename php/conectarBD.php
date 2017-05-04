<?php

// Datos para la coneccion a mysql 
$SERVIDOR_BD='localhost'; 
$USUARIO_BD='root'; 
$PASS_BD='';
$NOMBRE_BD='personajesdeseries'; 

// Realizamos la conexión con MySql
$conectado = mysqli_connect($SERVIDOR_BD,$USUARIO_BD,$PASS_BD); 
if (!$conectado){
	// En caso de que no se pueda conectar, se finaliza la conexión.
	echo ("Fallo al conectar a Mysql: ".mysqli_connect_errno($conectado)." ".mysqli_connect_error($conectado)."<br>");
	die("No ha sido posible realizar la conexión.<br><a href='index.php'>Volver</a>");
}
$consulta = mysqli_query($conectado,"SET NAMES 'utf8'"); /* Lanzar esta consulta justo despues de establecer la conexion con el servidor nos sirve para 
															evitar problemas con los acentos al presentar los resultados */
?>
