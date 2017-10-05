<?php
session_start();

if (isset($_POST['correo'])) {
    $link = mysqli_connect('localhost', 'root', '', 'ekothazi');
    $usuario = $_POST['correo'];
    $contraseña = $_POST['clave'];
    $log = "SELECT * FROM usuarios WHERE email='".$usuario."' AND contraseña='".$contraseña."'";
    $result = mysqli_query($link, $log);
    echo $log;
    echo $result;
    if (mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($log);
        $_SESSION["email"] = $row['email'];
        echo 'Iniciando sesión para ' . $_SESSION['email'] . ' <p>';
    } else {
        echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
        echo '<script> window.location="index.php"; </script>';
    }
}
?>