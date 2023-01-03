<?php
// Datos de conexión a la base de datos
$host = "localhost"; // Nombre del host o servidor donde se encuentra la base de datos
$username = "root"; // Nombre de usuario para conectarse a la base de datos
$password = "usbw"; // Contraseña del usuario para conectarse a la base de datos
$dbname = "jajalam"; // Nombre de la base de datos

// Crear conexión a la base de datos
$conexion = mysqli_connect($host, $username, $password, $dbname) or die (mysql_error());

// Si la conexión es exitosa, se puede comenzar a realizar consultas a la base de datos
// De lo contrario, la función mysqli_connect() devolverá un error
?>
