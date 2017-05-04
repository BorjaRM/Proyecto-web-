<?php
session_start();
// Eliminamos las variables de sesion creadas
session_unset(); 
// Destruimos la sesion
session_destroy();
// Redirigimos al usuario a la pagina principal
header("Location: index.php"); 
?>