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
$link = mysqli_connect('localhost', 'root', '', 'ekothazi');

if ($contrasena != $contrasenaComprobacion) {
    echo '<script>alert("Las contraseñas no coinciden");</script>';
    ?>
    <meta http-equiv="refresh" content="0; url=inicio.php">
    <?php
}

$sql = "SELECT email FROM 'usuarios' WHERE email = '$email'";
mysqli_set_charset($link, "utf8");

if ((mysqli_query($link, $sql)) >= 1) {
    echo '<script>alert("El email ya esta registrado");</script>';
    ?>
    <meta http-equiv="refresh" content="0; url=inicio.php">
    <?php
} else {
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