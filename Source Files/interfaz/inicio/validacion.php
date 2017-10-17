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
/*
 * Se recoge usuario que coincida contraseña y email en BBDD
 */
$sql = "SELECT * FROM $tbl_name WHERE email = '$correo'";

$result = $conexion->query($sql);

 $row = $result->fetch_array(MYSQLI_ASSOC);
 if ($contrasena === $row['clave']) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $correo;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

 } else { 
   echo "<script>alert('Username o Password están incorrectos.');</script>";

 }
 mysqli_close($conexion); 
 ?>
 <meta http-equiv="refresh" content="0; url=inicio.php">