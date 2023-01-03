<?php
require_once('conexion.php');

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición</title>
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
    <div class="div13"> 
        <form>
      <h1>CRUD</h1>
    <table class="table"><center>
      <thead class="table-success table-striped">
          <tr>
            <th>Id</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Marca</th>
            <th>Stock</th>
            <th>Fecha Cad</th>
            <th>Precio Compra</th>
            <th>Percio Venta</th>
            <th ></th>
            <th></th>
          </tr></thead>
            <?php
            $query = mysqli_query($conexion, "SELECT * FROM productos");
            $result= mysqli_num_rows($query);
            if($result>0){
              while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
              <th><?php echo $data ['id_inv']?></td></th>
               <th><img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($data['imagen'])?>"></th>
                <th><?php echo $data ['nombre']?></th>
                <th><?php echo $data ['descripcion']?></th>
                <th><?php echo $data ['marca']?></th>
                <th><?php echo $data ['stock']?></th>
                <th><?php echo $data ['fecha_cad']?></th>
                <th><?php echo $data ['costo_compra']?></th>
                <th><?php echo $data ['costo_venta']?></th>
                <th><a class="btn btn-success" href="actualizar.php?id=<?php  echo $data['id_inv']?>">Editar</button></th>
                <th><a class="btn btn-primary"  href="delete.php?id=<?php  echo $data['id_inv']?>">Eliminar</button></th>
              </tr>
            <?php
              }
            }
            ?>
          </table>
    </form></center>




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