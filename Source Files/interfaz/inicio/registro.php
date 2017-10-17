<html>
<body>
	<?php
/*
 * Recoger datos desde inicio, el rol siempre será user.
 */
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$contrasenaComprobacion = $_POST['contrasenaComprobacion'];
$rol = 'user';
$link = mysqli_connect('127.0.0.1:51032', 'talde1', 'admin', 'ekothazi');

/*
 * Comprobamos si el email introducido ya existe en la BBDD
 */
$sql = "SELECT email FROM usuarios WHERE email = '" .$email."'";
mysqli_set_charset($link, "utf8");
$result = $link->query($sql);

/*
 * Sentencia sql devuelve línea, email ya está registrado. 
 * Si no, comprobar campos de contraseña y crear usuario si coinciden
 */
if ($result->num_rows > 0) {
}
$row = $result->fetch_array(MYSQLI_ASSOC);
if ($email === $row['email']) { 
    echo '<script>alert("El email ya está registrado.");</script>';
    ?>
    <meta http-equiv="refresh" content="0; url=inicio.php">
    <?php
} else if($contrasena != $contrasenaComprobacion){
    echo '<script>alert("Las contraseñas no coinciden.");</script>';
    ?>
    <meta http-equiv="refresh" content="0; url=inicio.php">
    <?php
}else{
    $sqlDos = "INSERT INTO `usuarios`(`nombre`, `apellido`, `email`, `clave`, `rol`) VALUES ('$nombre','$apellido','$email', '$contrasena', '$rol')";
    mysqli_set_charset($link, "utf8");
    mysqli_query($link, $sqlDos);
     echo '<script>alert("¡Exito!, tu registro se ha completado.");</script>';
    ?>
    <meta http-equiv="refresh" content="0; url=inicio.php">
    <?php
}
?>
</body>
</html>
