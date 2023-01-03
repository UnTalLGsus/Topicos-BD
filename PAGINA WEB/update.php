<?php
// Se incluye el archivo de conexión a la base de datos
include("conexion.php");

// Se obtienen los valores enviados por el formulario de actualización
$cod_prod = $_POST["id_inv"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$marca = $_POST["marca"];
$stock = $_POST["stock"];
$fecha_cad = $_POST["fecha_cad"];
$costo_compra = $_POST["costo_compra"];
$costo_venta = $_POST["costo_venta"];

// Se escribe la consulta para actualizar los datos del producto
$sql = "UPDATE productos SET id_inv='$cod_prod', nombre='$nombre', descripcion='$descripcion', marca='$marca', stock='$stock', fecha_cad='$fecha_cad', costo_compra='$costo_compra', costo_venta='$costo_venta' WHERE id_inv='$cod_prod'";

// Se ejecuta la consulta en la base de datos
$query = mysqli_query($conexion, $sql);

// Si la consulta se ejecutó correctamente, se redirige al usuario a la página de edición de productos
if ($query) {
  header("location:edicion.php");
    }
?>
