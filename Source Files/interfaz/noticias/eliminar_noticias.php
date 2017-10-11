<?php
$link = mysqli_connect('localhost', 'root', '', 'ekothazi');

$id_entrada = $_POST['comboEntrada'];
echo $id_entrada;

$sql = "DELETE FROM `entrada_blog` WHERE id_entrada = '$id_entrada'";
mysqli_set_charset($link, "utf8"); /* Procedural approach */

$result = mysqli_query($link, $sql);
?>

<head>
<meta http-equiv="refresh" content="0; url=noticias.php"/>
</head>
</html>