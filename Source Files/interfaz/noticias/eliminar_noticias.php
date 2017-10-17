<?php
$link = mysqli_connect('127.0.0.1:51032', 'talde1', 'admin', 'ekothazi');
/*
 * Se recoge ID de entrada seleccionada en combo (noticias.php)
 */

$id_entrada = $_POST['comboEntrada'];

/*
 * Se elimina de la BBDD entrada con esa ID
 */
$sql = "DELETE FROM `entrada_blog` WHERE id_entrada = '$id_entrada'";
mysqli_set_charset($link, "utf8"); /* Procedural approach */

$result = mysqli_query($link, $sql);
?>
<html>
<head>
<meta http-equiv="refresh" content="0; url=noticias.php"/>
</head>
</html>