<?php

function validateUsername($name)
{
    // NO cumple longitud minima
    if (strlen($name) < 4)
        return false;
    // SI longitud pero NO solo caracteres A-z
    else if (! preg_match("/^[a-zA-Z]+$/", $name))
        return false;
    // SI longitud, SI caracteres A-z
    else
        return true;
}

function validatePassword1($password1)
{
    // NO tiene minimo de 5 caracteres o mas de 12 caracteres
    if (strlen($password1) < 5 || strlen($password1) > 12)
        return false;
    // SI longitud, NO VALIDO numeros y letras
    else if (! preg_match("/^[0-9a-zA-Z]+$/", $password1))
        return false;
    // SI rellenado, SI email valido
    else
        return true;
}

function validatePassword2($password1, $password2)
{
    // NO coinciden
    if ($password1 != $password2)
        return false;
    else
        return true;
}

function validateEmail($email)
{
    // NO hay nada escrito
    if (strlen($email) == 0)
        return false;
    // SI escrito, NO VALIDO email
    else if (! filter_var($_POST['email'], FILTER_SANITIZE_EMAIL))
        return false;
    // SI rellenado, SI email valido
    else
        return true;
}

// Comprobacion de datos
// variables valores por defecto
$username = "";
$usernameValue = "";
$password1 = "";
$password2 = "";
$email = "";
$emailValue = "";
$websiteValue = "";

// Validacion de datos enviados
if (isset($_POST['send'])) {
    if (! validateUsername($_POST['username']))
        $username = "error";
    if (! validatePassword1($_POST['password1']))
        $password1 = "error";
    if (! validatePassword2($_POST['password1'], $_POST['password2']))
        $password2 = "error";
    if (! validateEmail($_POST['email']))
        $email = "error";
    
    // Guardamos valores para que no tenga que reescribirlos
    $usernameValue = $_POST['username'];
    $emailValue = $_POST['email'];
    $websiteValue = $_POST['website'];
    
    // Comprobamos si todo ha ido bien
    if ($username != "error" && $password1 != "error" && $password2 != "error" && $email != "error")
        $status = 1;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cómo validar un formulario utilizando PHP y Javascript (jQuery) |
	Web.Ontuts</title>
<link rel="stylesheet" href="main.css" type="text/css" media="screen" />
</head>
<body>
	<div class="wrapper">
		<div class="section">  
            <?php if(!isset($status)): ?>  
            <h1>Formulario de validación en Cliente + Servidor</h1>
			<form id="form1" action="validacion.php" method="post">
				<label for="username">Nombre de usuario (<span id="req-username"
					class="requisites <?php echo $username ?>">A-z, mínimo 4 caracteres</span>):
				</label> <input tabindex="1" name="username" id="username"
					type="text" class="text <?php echo $username ?>"
					value="<?php echo $usernameValue ?>" /> <label for="password1">Contraseña
					(<span id="req-password1"
					class="requisites <?php echo $password1 ?>">Mínimo 5 caracteres,
						máximo 12 caracteres, letras y números</span>):
				</label> <input tabindex="2" name="password1" id="password1"
					type="password" class="text <?php echo $password1 ?>" value="" /> <label
					for="password2">Repetir Contraseña (<span id="req-password2"
					class="requisites <?php echo $password2 ?>">Debe ser igual a la
						anterior</span>):
				</label> <input tabindex="3" name="password2" id="password2"
					type="password" class="text <?php echo $password2 ?>" value="" /> <label
					for="email">E-mail (<span id="req-email"
					class="requisites <?php echo $email ?>">Un e-mail válido por favor</span>):
				</label> <input tabindex="4" name="email" id="email" type="text"
					class="text <?php echo $email ?>" value="<?php echo $emailValue ?>" />
				<label for="website">Sitio Web (Opcional):</label> <input
					tabindex="5" name="website" id="website" type="text" class="text"
					value="<?php echo $websiteValue ?>" />
				<div>
					<input tabindex="6" name="send" id="send" type="submit"
						class="submit" value="Enviar formulario" />
				</div>
			</form>  
            <?php else: ?>  
                <h1>¡Formulario enviado con éxito!</h1>  
            <?php endif; ?>  
        </div>
	</div>
	<script type="text/javascript" src="../javascript/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="../javascript/main.js"></script>
</body>
</html>