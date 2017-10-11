<?php
session_start();
?>
<html>
<?php
$titulo = $_POST['titulo'];
$cuerpo = $_POST['textoNoticia'];

$link = mysqli_connect('127.0.0.1:51032', 'talde1', 'admin', 'ekothazi');

$sql = "SELECT * FROM `usuarios` WHERE email='" . $_SESSION['username'] . "'";
mysqli_set_charset($link, "utf8"); /* Procedural approach */

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_array($result);

$id_autor = $row['id'];

$fecha = date("Y-m-d");

$sqlDos="INSERT INTO `entrada_blog`(`id_autor`, `titulo`, `cuerpo`, `fecha`) 
VALUES ('$id_autor','$titulo','$cuerpo','$fecha')";
mysqli_query($link, $sqlDos);
?>

<head>
<meta http-equiv="refresh" content="0; url=noticias.php"/>
</head>
</html>