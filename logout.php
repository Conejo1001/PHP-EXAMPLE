<?php
// Iniciar sesion
session_start();
 
// Desarmar todas las variables de sesión
$_SESSION = array();
 
// Cerrar sesion
session_destroy();
 
// Redireccionar al login
header("location: login.php");
exit;
?>