<?php

// Incluye el archivo de conexión a la base de datos
include("conexion.php");

// Asigna el valor del parámetro id de la URL a la variable $id
$id=$_GET['id'];

// Crea una consulta SQL para seleccionar todos los datos de la tabla productos donde el id del inventario sea igual al valor de la variable $id
$sql="SELECT * FROM productos WHERE id_inv='$id'";

// Ejecuta la consulta y almacena el resultado en la variable $query
$query=mysqli_query($conexion,$sql);

// Convierte el resultado de la consulta en un array y lo almacena en la variable $data
$data=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <!-- Incluye el archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Incluye el archivo CSS personalizado -->
    <link rel="stylesheet" href="styles/style1.css">
</head>
<!-- Incluye el archivo JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Crea una cabecera fija con el menú de navegación -->
<header class="container-fluid position-sticky top-0">
    <!-- INICIO DE NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <!-- Muestra el logo de la empresa -->
            <img src="img/logo.png" class="logo">
            <!-- Crea un menú de navegación desplegable -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- Crea las opciones del menú de navegación -->
                    <li class="nav-item opciones">
                        <b><a class="nav-link active" aria-current="page" href="principal.php">NOSOTROS</a></b>
                    </li>
                    <li class="nav-item opciones">
                        <b><a class="nav-link" href="productos.php">REGISTRO PRODUCTOS</a></b>
                    </li>
                    <li class="nav-item opciones">
                        <b><a class="nav-link" href="catalogo.php">CATALOGO</a></b>
                    </li>
                    <li class="nav-item opciones">
                        <b><a class="nav-link" href="edicion.php">EDICION</a></b>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Crea un botón para cerrar la sesión -->
        <button class="btn btn-outline-danger cerrar" type="submit">CERRAR</button>
    </nav>
    <!-- FIN DE NAVBAR -->
</header>
<body>
<!-- Crea un contenedor para el formulario de actualización -->
<div class="div13"> 
    <!-- Crea un formulario que envía los datos a la página update.php mediante el método POST -->
    <form action="update.php" method="POST">
        <!-- Muestra un título -->
        <h1>ACTUALIZAR</h1>
        <!-- Crea una tabla con los datos del producto -->
        <table class="table"><center>
            <!-- Crea una fila con el título de la columna Imagen -->
            <tr class="table-success table-striped"><th>Imagen</th></tr>
            <!-- Crea una fila con la imagen del producto -->
            <tr>
                <th>
                    <!-- Muestra la imagen del producto con base64 -->
                    <img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($data['imagen'])?>">
                </th>
            </tr>
            <!-- Crea una fila con el título de la columna Nombre -->
            <tr class="table-success table-striped"><th>Nombre</th></tr>
            <!-- Crea una fila con un campo de texto para el nombre del producto -->
            <tr>
                <th>
                    <!-- Muestra el nombre del producto en el campo de texto -->
                    <input type="text" name="nombre" value="<?php echo $data ['nombre']?>">
                </th>
            </tr>
          <!-- Crea una fila con el título de la columna Descripción -->
<tr class="table-success table-striped"><th>Descripción</th></tr>
<!-- Crea una fila con un campo de texto para la descripción del producto -->
<tr>
    <th>
        <!-- Muestra la descripción del producto en el campo de texto -->
        <input type="text" name="descripcion" value="<?php echo $data ['descripcion']?>">
    </th>
</tr>
<!-- Crea una fila con el título de la columna Marca -->
<tr class="table-success table-striped"><th>Marca</th></tr>
<!-- Crea una fila con un campo de texto para la marca del producto -->
<tr>      
    <th>
        <!-- Muestra la marca del producto en el campo de texto -->
        <input type="text" name="marca" value="<?php echo $data ['marca']?>">
    </th>
</tr>
<!-- Crea una fila con el título de la columna Stock -->
<tr class="table-success table-striped"><th>Stock</th></tr>
<!-- Crea una fila con un campo de texto para el stock del producto -->
<tr>
    <th>
        <!-- Muestra el stock del producto en el campo de texto -->
        <input type="text" name="stock" value="<?php echo $data ['stock']?>">
    </th>
</tr>
<!-- Crea una fila con el título de la columna Fecha Cad -->
          <tr class="table-success table-striped"><th>Fecha Cad</th></tr>
          <!-- Crea una fila con un campo de tipo fecha para la fecha de caducidad del producto -->
          <tr>
              <th>
                  <!-- Muestra la fecha de caducidad del producto en el campo de tipo fecha -->
                  <input type="date" name="fecha_cad" value="<?php echo $data ['fecha_cad']?>">
              </th>
          </tr> 
          <!-- Crea una fila con el título de la columna Precio Compra -->
          <tr class="table-success table-striped"><th>Precio Compra</th></tr>
          <!-- Crea una fila con un campo de texto para el precio de compra del producto -->
          <tr>
              <th>
                  <!-- Muestra el precio de compra del producto en el campo de texto -->
                  <input type="text" name="costo_compra" value="<?php echo $data ['costo_compra']?>">
              </th>
          </tr>
          <!-- Crea una fila con el título de la columna Precio Venta -->
<tr class="table-success table-striped"> <th>Percio Venta</th></tr>
<!-- Crea una fila con un campo de texto para el precio de venta del producto -->
<tr>
    <th>
        <!-- Muestra el precio de venta del producto en el campo de texto -->
        <input type="text" name="costo_venta" value="<?php echo $data ['costo_venta']?>">
    </th>
</tr>

<!-- Cierra la tabla -->
</table>

<!-- Crea un botón de tipo submit para enviar los datos de la formulario -->
<input type="submit" class="btn btn-success" value="Editar">

<!-- Cierra la formulario -->
</form>

<!-- Cierra el centro del contenido -->
</center>

<!-- Cierra el div principal -->
</div>
  <footer>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">JAJALAM</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>
</html>