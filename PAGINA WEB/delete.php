<?php
// Incluyo la conexión a la base de datos
include("conexion.php");

// Obtengo el ID del producto a eliminar
$cod_prod = $_GET["id"];

// Preparo la consulta SQL para eliminar el producto con el ID especificado
$sql = "DELETE FROM productos WHERE id_inv='$cod_prod'";

// Ejecuto la consulta en la base de datos
$query = mysqli_query($conexion, $sql);

// Si la consulta se ejecutó con éxito, redirijo al usuario a la página de edición
if($query) {
    header("location:edicion.php");
}

?>