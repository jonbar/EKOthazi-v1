<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

$link = mysqli_connect('localhost', 'root', '', 'ekothazi');
$sql="INSERT INTO `atencion_cliente`(`nombre`, `email`, `comentario`) VALUES ('$nombre','$email','$comentario')";
mysqli_set_charset($link, "utf8");
mysqli_query($link, $sql);

header('location: quienes_somos.php');
?>