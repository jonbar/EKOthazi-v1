<html lang="en">
<head>
<title>Inicio</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/inicio.css"
	media="screen" />
<link rel="stylesheet" type="text/css" href="../../css/general.css"
	media="screen" />
<!-- descarga de jquery -->

</head>
<body style="text-align: justify;">
	<header>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div background-color="green" class="navbar-header">
						<img src="../../img/logo largo.png" style="height: 150px;">
					</div>
					<div class="container-fluid">

						<ul class="nav navbar-nav navbar-right">
							<li>
								<button type="button" class="btn btn-link" data-toggle="modal"
									data-target="#myModal">
									<span class="glyphicon glyphicon-log-in"></span> Iniciar sesion
								</button>
							</li>
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
									<form>
										<div class="form-group">
											<label for="email">Correo electrónico:</label> <input
												type=class= "form-control" id="email">
										</div>
										<div class="form-group">
											<label for="pwd">Contraseña:</label> <input type="password"
												class="form-control" id="pwd">
										</div>
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
                $link = mysqli_connect('localhost', 'root', '', 'ekothazi');
                $sql = "SELECT * FROM `entrada_blog` WHERE id_entrada = ( SELECT MAX(`id_entrada`) FROM entrada_blog)";
                mysqli_set_charset($link, "utf8"); /* Procedural approach */
                $link->set_charset("utf8");
                $result = mysqli_query($link, $sql);
                
                $row = mysqli_fetch_array($result);
                echo '<div class="well" style="background-color: white">';
                echo '<h3 class="media-heading"><b>' . $row['titulo'] . '</b></h3>';
                echo '<br>';
                echo $row['cuerpo'];
                echo "<img src='" . $row['imagen1'] . "' class='media-object' style='width:500px; margin: auto'>";
                echo '</div>';
                mysqli_free_result($result);
                ?>

			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<button type="button" class="btn" data-toggle="modal"
						data-target="#myModalRegistro">
						<span class="glyphicons glyphicons-leaf"></span> Registrate en
						nuestra p�gina
					</button>
					<div class="modal fade" id="myModalRegistro" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Registro</h4>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="email">Correo electrónico:</label> <input
												type="email" class="form-control" id="email">
										</div>
										<div class="form-group">
											<label for="pwd">Contraseña:</label> <input type="password"
												class="form-control" id="pwd">
										</div>
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
				<div class="thumbnail">
					<script>
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip();   
                    });
                    </script>

					<a href="../productos/productos.php" target="_blank"
						data-toggle="tooltip" title="Ver tienda"> <img
						src="../../img/ecomarket.png" style="width: 50%">
					</a>
				</div>
				<div>
					<table>
						<td><a href="#" data-toggle="tooltip" data-placement="bottom"
							title="Facebook"><img src="../../img/facebook_icon.png"
								class="redSocial" /></a></td>
						<td><a href="#" data-toggle="tooltip" data-placement="bottom"
							title="Twitter"><img src="../../img/twitter_icon.png"
								class="redSocial" /></a></td>
						<td><a href="#" data-toggle="tooltip" data-placement="bottom"
							title="Instagram"><img src="../../img/instagram_icon.png"
								class="redSocial" /></a></td>
					</table>
				</div>
				<div class="row">
					<div>
						<a class="twitter-timeline"
							href="https://twitter.com/hashtag/ecologico"
							data-widget-id="912648408506257408">Tweets sobre #ecológico</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],
p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+
"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container-fluid">
				<div class="row" style="background-color: #E6E6E6;">
					<div class="col-sm-4">
						<img src="../../img/logoLargoFooter.png" class="imagenFooter">
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
						<h4 style="color: 7ac043">Visita nuestro blog</h4>
						<ul>
							<li style="color: 7ac043">Blog</li>
						</ul>
					</div>
					<div class="col-sm-2">
						<table style="margin-top: 15px">
							<tr>
								<td colspan="2" style="text-align: center"><a href="#"
									data-toggle="tooltip" data-placement="bottom" title="Facebook"><img
										src="../../img/facebook_icon.png" class="redSocialFooter" /></a></td>
							</tr>
							<tr>
								<td><a href="#" data-toggle="tooltip" data-placement="bottom"
									title="Twitter"><img src="../../img/twitter_icon.png"
										class="redSocialFooter" /></a></td>
								<td><a href="#" data-toggle="tooltip" data-placement="bottom"
									title="Instagram"><img src="../../img/instagram_icon.png"
										class="redSocialFooter" /></a></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row derechos" style="background-color: #E6E6E6;">&#169;
					EKOthazi S.L. 2005-2017. TODOS LOS DERECHOS RESERVADOS</div>
			</div>
		</footer>
		<!--  -->
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="main.js"></script>

</body>
</html>
