<?php
  // Incluye la conexión a la base de datos
  require_once('conexion.php');

  // Verifica que todos los campos del formulario estén completos
  if(empty($_POST['nombre_prod'])|| empty($_POST['descripcion']) || empty($_POST['marca']) ||empty($_POST['stock']) || empty($_POST['caducidad']) || empty($_POST['compra']) || empty($_POST['venta'])){
    // Si alguno de los campos está vacío, muestra un mensaje de error
    echo '<script type="text/javascript"> 
      mensaje = "Ingrese todos los campos solicitados"
      alert(mensaje);
      </script>';
  } else { 
    // Si todos los campos están completos, asigna a variables cada uno de los valores del formulario
    $nombre_prod = $_POST['nombre_prod'];
    $descripcion = $_POST['descripcion'];
    $marca = $_POST['marca'];
    $stock = $_POST['stock'];
    $caducidad = $_POST['caducidad'];
    $compra = $_POST['compra'];
    $venta = $_POST['venta'];
    // Convierte la imagen en una cadena de texto para poder guardarla en la base de datos
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    //Se ejecuta la consulta para agregar los datos a la tabla productos
  $query= "INSERT INTO productos (nombre, descripcion, marca, stock, fecha_cad, costo_compra, costo_venta,imagen) VALUES ('$nombre_prod','$descripcion', '$marca', '$stock', '$caducidad','$compra','$venta','$imagen')" ;
  //se guarda el resultado en una variable
  $resultado=$conexion->query($query);
//Si el resultado es positivo se muestra una alerta buena
    if($resultado){
    echo '<script type="text/javascript"> 
    mensaje = "Los datos se registraron correctamente"
    alert(mensaje);
    </script>';
    }else{
      //Si el resultado es negativo se muestra una alerta de error
    echo '<script type="text/javascript"> 
    mensaje = "Error al insertar datos"
    alert(mensaje);
    </script>';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style1.css">
</head>
<script src="js/bootstrap.min.js"></script>
<header class="container-fluid position-sticky top-0">
    <!--<div class="menu">
        <ul class="menu1">
        <li><img src="img/logo.png" class="logo"></li>-->
       
       <!--INICIO DE NAVBAR-->
        <nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <img src="img/logo.png" class="logo">
              
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
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
            <button class="btn btn-outline-danger cerrar" type="submit">CERRAR</button>
          </nav>

          <!---FIN NAVBAR-->
</header>

<body>
    <div class="div12"> 
    <h1>Registro de Productos</h1>
      <form method="post" enctype="multipart/form-data">
        <center>
        <h3>Ingresa los datos del  nuevo producto</h3>
        <table class="tabla1">
          <tbody>
          <tr>
            <th scope="row">Nombre:</th>
            <td><input type="text"  id="nombre_prod" name="nombre_prod" required ></td>
          </tr>
          <tr>
            <th scope="row">Descripción: </th>
            <td ><input type="text" id="descripcion" name="descripcion" required></td>
          </tr>
          <tr>
            <th scope="row">Marca: </th>
            <td ><input type="text" id="marca" name="marca" required></td>
          </tr>
          <tr>
            <tr>
            <th scope="row">Stock: </th>
            <td ><input type="text"  id="stock" name="stock" required></td>
          </tr>
          <tr>
            <th scope="row">Fecha Caducidad: </th>
            <td ><input type="date" id="caducidad" name=" caducidad" required></td>
          </tr>
          <tr>
            <th scope="row">Precio Compra: </th>
            <td ><input type="text" id="compra" name="compra" required></td>
          </tr> 
          <tr>
            <th scope="row">Precio Venta: </th>
            <td ><input type="text" id="venta" name="venta" required></td>
          </tr>  
          <tr>
            <th scope="row">Imágen</th>
            <td ><input type="file" accept="image/png,image/jpeg" id="imagen" name="imagen" required></td>
          </tr>                  
        </tbody></table>
        <br>
        <button class="btn btn-success" type="submit" >Registrar</button>
        <br></center>
      </form>
    
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