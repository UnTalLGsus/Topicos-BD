<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra tienda</title>
    <link rel="stylesheet" href="styles/style1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    
</head>
<header>

</header>
<body>
    <script src="cambio.js"></script>
    <div class="div1" id="div1">
        <img src="img/logo.png" class="logop">
        <h1>Bienvenido a nuestra tienda online</h1><br>
        <button class="btn btn-info btn1"  onclick="show('Div2')"><b>Continuar</b></a></button>
    </div>
    <div class="div2" id="div2">
      <img src="img/logo.png" class="logop">  
      <h1>Elige que hacer</h1>
        <label>Crear una Cuenta</label>
        <br>
        <button class="btn btn-warning btn2" onclick="show('Div3')">Aqui</button>
        <br><br>
        <label>Ingresar al Sistema</label>
        <br>
        <button class="btn btn-warning btn2" onclick="show('Div4')" >Aqui</button>
        
        
    </div>

    <div class="div3" id="div3">
        <form action="registrar.php" method="post">
          <img src="img/logo.png" class="logop">
            <h1>Ingresa los Datos Solicitados</h1>
            <table class="tabla1">
                <tbody>
                <tr>
                  <th scope="row">Nombre Completo</th>
                  <td><input type="text" maxlength="100" id="nombre" name="nombre" required ></td>
                </tr>
                <tr>
                  <th scope="row">Domicilio</th>
                  <td ><input type="text" maxlength="100" id="domicilio" name="domicilio"required></td>
                </tr>
                <tr>
                  <th scope="row">Teléfono</th>
                  <td ><input type="text" maxlength="20" id="tel" name="tel"required></td>
                </tr>
                <tr>
                  <tr>
                  <th scope="row">Correo</th>
                  <td ><input type="email"  id="correo" name="correo" required ></td>
                </tr>
                <tr>
                  <th scope="row">Contraseña</th>
                  <td ><input type="password" maxlength="64" id="pass" name=" pass" required></td>
                </tr>
                <tr>
                  <th scope="row">Verifica Contraseña</th>
                  <td ><input type="password" id="pass2" name="pass2"></td>
                </tr>                   
              </tbody></table>
              <br>
              <button class="btn btn-success" type="submit" >Registrar</button>
              <br>
              <p>¿Ya tienes cuenta? Ingrega <button class="ya" onclick="show('Div4')"><b>Aquí</b></button></p>
    </form>
    </div>
    <div class="div4" id="div4">
      <form action="buscar.php" method="post">
      <img src="img/logo.png" class="logop">
      <h1>Login</h1>
      <table class="tabla1">
        <tbody> 
      <tr>
        <th class="login" scope="row">Correo</th>
        <td ><input type="email"  id="correo" name="correo" required ></td>
      </tr>
      <tr>
        <th class="login" scope="row">Contraseña</th>
        <td ><input type="password" maxlength="64" id="pass" name=" pass" required></td>
      </tr>
      </tbody></table><br>
  <input class="btn btn-primary" type="submit" value="Ingresar" >
</form></div>
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