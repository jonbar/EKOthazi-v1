<?php
session_start();
?>

<?php

$host_db = "127.0.0.1:51032";
$user_db = "talde1";
$pass_db = "admin";
$db_name = "ekothazi";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$correo = $_POST['correo'];
$contrasena = $_POST['clave'];

$sql = "SELECT * FROM $tbl_name WHERE email = '$correo'";

$result = $conexion->query($sql);

 $row = $result->fetch_array(MYSQLI_ASSOC);
 if ($contrasena === $row['clave']) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $correo;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>
 <meta http-equiv="refresh" content="20; url=inicio.php">