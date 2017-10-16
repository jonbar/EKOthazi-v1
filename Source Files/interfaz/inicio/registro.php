<html>
<head>
</head>
<body>
	<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$contrasenaComprobacion = $_POST['contrasenaComprobacion'];
$rol = 'user';
$link = mysqli_connect('127.0.0.1:51032', 'talde1', 'admin', 'ekothazi');

if ($contrasena != $contrasenaComprobacion) {
    echo '<script>alert("Las contraseñas no coinciden");</script>';
    ?>
    <meta http-equiv="refresh" content="0; url=inicio.php">
    <?php


$sql = "SELECT * FROM 'usuarios' WHERE email='" . $email . "'";
mysqli_set_charset($link, "utf8");
$result= $link ->query($sql);

if($result -> num_rows > 0){
}
$row = $result -> fetch_array(MYSQLI_ASSOC);
if($email === $row['email']){
    echo '<script>alert("El email ya esta registrado.");</script>';

    ?>
    <meta http-equiv="refresh" content="0; url=inicio.php">
    <?php
}else {

    $sqlDos = "INSERT INTO `usuarios`(`nombre`, `apellido`, `email`, `clave`, `rol`) VALUES ('$nombre','$apellido','$email', '$contrasena', '$rol')";
    mysqli_set_charset($link, "utf8");
    mysqli_query($link, $sqlDos);
    // echo '<script>alert("Exito!, tu registro se ha completado.");</script>';
    ?>
    <meta http-equiv="refresh" content="5; url=inicio.php">
    <?php
}
?>
	
</body>
</html>