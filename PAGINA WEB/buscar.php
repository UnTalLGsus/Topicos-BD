<?php
session_start();

// Establecemos la conexión a la base de datos
$host = "localhost:3307";
$user = "root";
$password = "usbw";
$db = "jajalam";
$con = new mysqli($host, $user, $password, $db) or die ("Error al conectar a la base de datos: " . mysqli_error($con));

// Recogemos los datos del formulario de inicio de sesión
$correo = $_POST['correo'];
$pass = hash('haval256,5', $_POST["pass"]);

// Realizamos una consulta a la tabla de usuarios para verificar si existe un usuario con el correo y contraseña proporcionados
$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND pass='$pass'";
$result = $con->query($sql);
$num = mysqli_num_rows($result);
$registro = mysqli_fetch_array($result);

// Si se ha encontrado un usuario con esas credenciales, iniciamos sesión y redirigimos a la página principal
if ($num > 0) {
    $_SESSION["rol"] = $registro['canela'];
    $_SESSION["rol"] = $registro['nombre_usuario'];
    header("location:principal.php");
} else {    
    // Si no se ha encontrado un usuario con esas credenciales, destruimos la sesión y mostramos un mensaje de error
    session_destroy();
    echo '<script type="text/javascript">
        mensaje = "Usuario o contraseña incorrectos"
        alert(mensaje);
        window.history.back();
    </script>';
}

// Cerramos la conexión a la base de datos
mysqli_close($con);
?>
