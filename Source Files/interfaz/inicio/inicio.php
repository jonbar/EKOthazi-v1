
<html>
<head>
<?php
session_start();

?>
<title>Inicio</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../../javascript/main.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/inicio.css"
	media="screen" />
<link rel="stylesheet" type="text/css" href="../../css/general.css"
	media="screen" />

</head>
<body style="text-align: justify;">

	<header>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="col-sm-6">
						<a href="../inicio/inicio.php"><img src="../../img/logo largo.png"
							class="imgLogo"></a>
					</div>
					<div class="container-fluid">
						<ul class="nav navbar-nav navbar-right">
						<?php
    if ($_SESSION == true) {
        $link = mysqli_connect('127.0.0.1:51032', 'talde1', 'admin', 'ekothazi');
        
        $sql = "SELECT * FROM `usuarios` WHERE email ='" . $_SESSION['username'] . "'";
        mysqli_set_charset($link, "utf8"); /* Procedural approach */
        
        $result = mysqli_query($link, $sql);
        
        $row = mysqli_fetch_array($result);
        echo 'Hola, ' . $row['nombre'] . ' ' . $row['apellido'];
        ?>
                            	<a href="logout.php"> <span
								class="glyphicon glyphicon-log-out"></span></a>
               				<?php
    } else {
        ?>
                                <li>
								<button type="button" class="btn btn-link" data-toggle="modal"
									data-target="#myModal">
									<span class="glyphicon glyphicon-log-in"></span> Iniciar sesión
								</button>
							</li>
                        <?php } ?>
							
						</ul>
						<ul class="nav navbar-nav navbar-right" style="margin-top: 75px;">
							<li class="active"><a href="#">INICIO</a></li>
							<li><a href="../quienes_somos/quienes_somos.php">QUIENES SOMOS</a></li>
							<li><a href="../noticias/noticias.php">NOTICIAS</a></li>
							<li><a href="../productos/productos.php">PRODUCTOS</a></li>
						</ul>
					</div>
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">

									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Inicio de sesión</h4>
								</div>
								<div class="modal-body">
									<form name="encuesta" action="validacion.php" method="POST"
										onsubmit="return enviar()">
										<label for="input">Correo electrónico:</label><br> <input
											type="text" class="form-control" name="correo" id="correo"
											onKeyPress="return comprobarArroba(event)"
											required="required" /><br> <label for="input">Contraseña: </label><br>
										<input type="password" class="form-control" id="clave"
											name="clave" required="required" />

										<div class="checkbox">
											<label><input type="checkbox"> Recordarme en esta página</label>
										</div>
										<button type="submit" class="btn btn-default">Enviar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">

				<?php
    $link = mysqli_connect('127.0.0.1:51032', 'talde1', 'admin', 'ekothazi');
    
    $sql = "SELECT * FROM `entrada_blog` WHERE id_entrada = ( SELECT MAX(`id_entrada`) FROM entrada_blog)";
    mysqli_set_charset($link, "utf8"); /* Procedural approach */
    
    $result = mysqli_query($link, $sql);
    
    $row = mysqli_fetch_array($result);
    echo '<div class="well" style="background-color: white">';
    echo '<h3 class="media-heading"><b>' . $row['titulo'] . '</b></h3>';
    echo '<br>';
    echo $row['cuerpo'];
    if ($row['imagen1'] != 'NULL') {
        echo "<img src='" . $row['imagen1'] . "' class='media-object imgInicio'>";
    }
    echo '</div>';
    mysqli_free_result($result);
    ?>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
						<?php
    if ($_SESSION == false) {
        ?>
					<button type="button" class="btn btn-info btn-sm"
						data-toggle="modal" data-target="#myModalRegistro"
						style="width: 100%; background-color: #5FB404">

						<span class="glyphicon glyphicon-leaf"></span> <b>Regístrate en
							nuestra página</b>

					</button>

					<!-- Trigger the modal with a button -->

					<!-- Modal -->
					<div id="myModalRegistro" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Formulario de registro</h4>
								</div>
								<div class="modal-body">
									<form action="registro.php" method="POST">
										<div class="form-group">
											<label for="email">Nombre:</label> <input type="text"
												class="form-control" name="nombre" id="nombre"
												required="required" />
										</div>
										<div class="form-group">
											<label for="email">Apellido:</label> <input type="text"
												class="form-control" name="apellido" id="apellido"
												required="required" />
										</div>
										<div class="form-group">
											<label for="email">Correo:</label> <input type="email"
												class="form-control" name="email" id="email"
												required="required" />
										</div>
										<div class="form-group">
											<label for="pwd">Contraseña:</label> <input type="password"
												class="form-control" name="contrasena" id="contrase�a"
												required="required" />
										</div>
										<div class="form-group">
											<label for="pwd">Repite la contraseña:</label> <input
												type="password" class="form-control"
												name="contrasenaComprobacion" id="contrase�aComprobacion"
												required="required" />
										</div>
										<button type="submit" class="btn btn-default">Enviar</button>
									</form>
								</div>
							</div>

						</div>
					</div>
					
					<?php
    }
    ?>
				</div>

				<div class="thumbnail">
					<script>
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip();   
                    });
                    </script>

					<a href="../productos/productos.php" data-toggle="tooltip"
						title="Ver tienda"> <img src="../../img/ecomarket.png"
						style="width: 50%">
					</a>
				</div>
				<div>
					<table>
						<tr>
							<td><a href="#" data-toggle="tooltip" data-placement="bottom"
								title="Facebook"><img src="../../img/facebook_icon.png"
									class="redSocial" /></a></td>
							<td><a href="https://twitter.com/Ecotiendagdl"
								data-toggle="tooltip" data-placement="bottom" title="Twitter"><img
									src="../../img/twitter_icon.png" class="redSocial" /></a></td>
							<td><a href="https://web.stagram.com/ecotiendaorganica"
								data-toggle="tooltip" data-placement="bottom" title="Instagram"><img
									src="../../img/instagram_icon.png" class="redSocial" /></a></td>
						</tr>
					</table>
				</div>
				<div class="row">
					<div>

						<a class="twitter-timeline"
							href="https://twitter.com/hashtag/ecologico"
							data-widget-id="912648408506257408">Tweets sobre #ecologico</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':
							'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+
							"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script",
									"twitter-wjs");</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="container-fluid">
				<div class="row" style="background-color: #E6E6E6;">
					<div class="col-sm-4">
						<img src="../../img/logoLargoFooter.png" class="imgLogoFooter">
					</div>
					<div class="col-sm-3">
						<h4 style="color: 7ac043;">Información</h4>
						<ul style="color: 7ac043">
							<li>Aviso legal</li>
							<li>Preguntas frecuentes</li>
							<li>Trabaja con nosotros</li>
							<li>Envíos y devoluciones</li>
						</ul>
					</div>

					<div class="col-sm-3">
						<h4 style="color: 7ac043">Conócenos</h4>
						<ul>

							<a href="../quienes_somos/quienes_somos.php"
								style="color: 7ac043"><li>Contacto</a>
							</li>
							<a href="../noticias/noticias.php" style="color: 7ac043"><li>Blog</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-2">
						<table style="margin-top: 15px">
							<tr>
								<td colspan="2" style="text-align: center"><a
									href="https://www.facebook.com/ecotiendaorganicaynatural/"
									data-toggle="tooltip" data-placement="bottom" title="Facebook"><img
										src="../../img/facebook_icon.png" class="redSocialFooter" /></a></td>
							</tr>
							<tr>
								<td><a href="https://twitter.com/Ecotiendagdl"
									data-toggle="tooltip" data-placement="bottom" title="Twitter"><img
										src="../../img/twitter_icon.png" class="redSocialFooter" /></a></td>
								<td><a href="https://web.stagram.com/ecotiendaorganica"
									data-toggle="tooltip" data-placement="bottom" title="Instagram"><img
										src="../../img/instagram_icon.png" class="redSocialFooter" /></a></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row derechos" style="background-color: #E6E6E6;">&#169;
					EKOthazi S.L. 2005-2017. TODOS LOS DERECHOS RESERVADOS</div>
			</div>
		</div>
	</footer>
	<!--  -->
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="main.js"></script>

</body>
</html>
