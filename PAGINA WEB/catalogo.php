<?php
include ("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style1.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<header class="container-fluid position-sticky top-0">      
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
      <center>
        <h1 class="titi-cat">Catalogo</h2>
        
      </center>
    <div class="container">
      <div class="row ">

                <?php
            $query = mysqli_query($conexion, "SELECT * FROM productos");
            $result= mysqli_num_rows($query);
            if($result>0){
              while($data = mysqli_fetch_array($query)){?>
              <div class="card cuadro" style="width: 18rem;">
                       <div class="card-body">
                       <center>
                      <img width="75px" height="90px" src="data:image/jpg;base64, <?php echo base64_encode($data['imagen'])?>" class="img-cat">
                      <br>
                            <h5 class="card-title"><b>Nombre: </b><?php echo $data ['nombre']?></h5>
                            <p class="card-text precio"><b>Costo:  </b> <?php echo $data ['costo_venta']?></p>
                            <p class="card-text"><b>Descripción: </b><?php echo $data ['descripcion']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                            <!--<div class="d-grid gap-2 col-12 mx-auto">
                           <button class="btn btn-primary button" type="button">Agregar al carrito</button>
                          </div>-->
                                
                            </div>
                        </div>
                    </div>                 
                
                </center>
                  
                <?php
              }
            }
            ?>
                  
          
            
        </div>
    </main>
    </div></div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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