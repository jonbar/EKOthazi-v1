<?php
session_start();
?>

<?php

$link = mysqli_connect('127.0.0.1:51032', 'talde1', 'admin', 'ekothazi');

if ($link->connect_error) {
 die("La conexion falló: " . $link->connect_error);
}

$correo = $_POST['correo'];
$contrasena = md5($_POST['clave']);
 
$sql = "SELECT * FROM $tbl_name WHERE email = '$correo'";

$result = $link->query($sql);
$row = mysqli_fetch_array($result);


 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($contrasena, $row['clave'])) { 
echo 'jelou';
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
 mysqli_close($link); 

 ?>
    <meta http-equiv="refresh" content="5; url=inicio.php">