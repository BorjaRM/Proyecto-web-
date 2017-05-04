<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="formularios.css" />
<link rel="stylesheet" type="text/css" href="fondo.css" />
<title>Login</title>
</head>
<body>
<?php
require 'usarBD.php';
if(isset($_POST['entrar'])){ // Si el usuario ha hecho click en Entrar
  include 'cookies.php';
  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];
  if(datos_correctos($conectado,$usuario,$pass)){ //Si los datos son correctos registramos datos de la sesion y redirigimos al usuario a la aplicacion.
    $_SESSION["autenticado"]="si";
    header ("Location: verSeries.php");
  }else
    header ("Location: index.php?datoserroneos=si");
}

function datos_correctos($conectado,$usuario,$pass){
  $consulta = "SELECT * FROM USUARIOS WHERE usuario='$usuario' AND contrasenya='$pass'";
  $resultado = mysqli_query($conectado,$consulta);
  if(mysqli_num_rows($resultado) > 0){
    return true;
  }else{
    return false;
  }
}
?>
<div id="marco">
	<form id="form1" name="form1" method="post" action="index.php">
        <p>
          <?php if (isset($_GET['datoserroneos'])) if ($_GET["datoserroneos"]=="si") echo("<p class='error'>Datos incorrectos</p>");?>
          <label for="usuario">Usuario</label>
            <br />
            <input name="usuario" type="text" id="usuario" size="40" placeholder="usuario"
            value="<?php if (isset($_COOKIE['user'])) echo $_COOKIE['user']; ?>" required/>
            <br />
          <label for="pass">Contraseña</label><br />
            <input name="pass" type="password" id="pass" size="40" placeholder="contraseña"
            value="<?php if (isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>" required/>
            <br />
          <input type="checkbox" name="opcion" id="recordar" value="recordar" />
          <label for="recordar">Recordar datos</label><br />
          <input class="boton" type="submit" name="entrar" id="button" value="Entrar">
        </p>
        <p>¿No tienes cuenta?
          <input class="boton" type="button" onclick="location.href='registro.php'" name="button2" id="button2" value="Registrarse" />
        </p>
        <?php
          require 'conectarBD.php';
          // Comprobamos si existe la base de datos
          $consulta="select SCHEMA_NAME from information_schema.SCHEMATA WHERE SCHEMA_NAME='".$NOMBRE_BD."';";
          $resultado=mysqli_query($conectado,$consulta);
          if(mysqli_num_rows($resultado) == 0){ //Si la base de datos no existe no devolvera ningun resultado y aparecera el boton para crearla
            echo ("Es necesario crear la base de datos");
            echo ("<input class=\"boton\" style=\"background-color:orange\" type=\"button\" onclick=\"location.href='crearBD.php'\" name=\"button3\" id=\"button3\" value=\"Crear Base de Datos\" />");
          }
        ?>
  </form>
</div>
</body>
</html>