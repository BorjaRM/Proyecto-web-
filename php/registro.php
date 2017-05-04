<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="formularios.css" />
<link rel="stylesheet" type="text/css" href="fondo.css" />
<title>Registro</title>
</head>
<body>
<div id="marco">
  <form id="form1" name="form1" method="post" action="registro.php">
    <p>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" placeholder="nombre" value="<?php if (isset($_POST['nombre'])) echo $_POST['nombre']; ?>" required/>
      <label for="apellidos">Apellidos</label>
      <input type="text" name="apellidos" id="apellidos" placeholder="apellidos" value="<?php if (isset($_POST['apellidos'])) echo $_POST['apellidos']; ?>" required/>
      <label for="email">Email</label>
      <input type="text" name="email" id="email" placeholder="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required/>
      <label for="usuario">Usuario
      <br />
      <input name="usuario" type="text" id="usuario" size="40" placeholder="usuario" required/>
      </label>
      <label for="pass">Contraseña<br /></label>
        <input name="pass" type="password" id="pass" size="40" placeholder="contraseña" required/>
      <label for="pass2"></label>
      <input name="pass2" type="password" id="pass2" size="40" placeholder="repita contraseña" required/>
      <input class="boton" type="submit" name="enviar" id="button" value="Enviar Datos">
      <input class="boton" type="button" onclick="location.href='index.php'" name="cancelar" id="button2" value="Cancelar"/>
    </p>
</form>
</div>
<?php
if(isset($_POST['enviar'])){ // Si el usuario ha hecho click en enviar los datos para el registro
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$pass2 = $_POST['pass2'];
  if($pass == $pass2){ // Comprobamos si las contraseñas coinciden
    require 'usarBD.php';
    if(@existe_usuario($conectado,$usuario)){
    	echo "El usuario ya existe";
    }else{
    	mysqli_query($conectado,"INSERT INTO USUARIOS (usuario,nombre,apellidos,email,contrasenya) VALUES ('$usuario','$nombre','$apellidos','$email','$pass')")or die(mysqli_error($conectado)."  ".mysqli_errno($conectado));
    	header ("Location: index.php");
    }
  }else
    echo "Las contraseñas no coinciden<br>";
  }

function existe_usuario($conectado,$usuario){
	$consulta = "SELECT usuario FROM USUARIOS";
	$resultado = mysqli_query($conectado,$consulta);
	if(mysqli_num_rows($resultado) > 0){
		while($row = mysqli_fetch_array($resultado)){
			if($row['usuario'] == $usuario){
				return (true);
			}
		}
	}
}
?>
</body>
</html>