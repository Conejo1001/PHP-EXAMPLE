<?php
/* Credenciales para acceder a la base de datos */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'conejorules');
define('DB_NAME', 'users');
 
/* Intentar conectarse a la base */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Checar conexion
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>