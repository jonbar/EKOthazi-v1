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

if ($contrasena != $contrasenaComprobacion) {
    echo '<script>alert("Las contraseñas no coinciden");</script>';
    ?>
    <meta http-equiv="refresh" content="5; url=inicio.php">
    <?php
} else {
    $link = mysqli_connect('localhost', 'root', '', 'ekothazi');
    $sql = "INSERT INTO `usuarios`(`nombre`, `apellido`, `email`, `clave`, `rol`) VALUES ('$nombre','$apellido','$email', '$contrasena', '$rol')";
    mysqli_set_charset($link, "utf8");
    mysqli_query($link, $sql);
  //  echo '<script>alert("Exito!, tu registro se ha completado.");</script>';
    ?>
    <meta http-equiv="refresh" content="5; url=inicio.php">
    <?php
    
}
?>
	
</body>
</html>