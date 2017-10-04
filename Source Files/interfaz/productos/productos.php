<html>

<head>
<title>Productos</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<link rel="stylesheet" href="../../css/productos.css">
<link rel="stylesheet" href="../../css/general.css">
<link rel="stylesheet" href="../../css/inicio.css">

<link rel="stylesheet" href="../../css/productos.css"/>
<link rel="stylesheet" href="../../css/general.css" />
<link rel="stylesheet" href="../../css/inicio.css" />

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<header>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div background-color="green" class="navbar-header">
						<a href="../inicio/inicio.php"><img src="../../img/logo largo.png" style="height: 150px;"></a>
					</div>
					<div class="container-fluid">

						<ul class="nav navbar-nav navbar-right">
							<li>
								<button type="button" class="btn btn-link" data-toggle="modal"
									data-target="#myModal">
									<span class="glyphicon glyphicon-log-in"></span> Iniciar sesión
								</button>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right" style="margin-top: 75px;">
							<li><a href="../inicio/inicio.php">INICIO</a></li>
							<li><a href="../quienes_somos/quienes_somos.php">QUIENES SOMOS</a></li>
							<li><a href="../noticias/noticias.php">NOTICIAS</a></li>
							<li class="active"><a href="#">PRODUCTOS</a></li>
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
											<label for="email">Dirección de correo electrónico:</label> <input
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
			</nav>
		</div>
	</header>
	<div class="container mantenimientoProductos" >
	<div class="imagenMantenimiento">
		<img src="../../img/maintenanceicon.png" alt="" />

		<h2 class="h1Mantenimiento">Oops... ¡Página en mantenimiento!</h2>
		<p class="textoMantenimiento">Disculpen las molestias, estamos trabajando </br> en esta sección para que pronto podáis disfrutarla.</p>
		<p class="textoMantenimiento">¡Volvemos en breve!</p>
	</div>
	</div>
	<footer>
	<div class="container">
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
					<h4 style="color: 7ac043">Conócenos</h4>
					<ul>
						
						<a href="../quienes_somos/quienes_somos.php" style="color: 7ac043"><li>Contacto</a></li>
						<a href="../noticias/noticias.php" style="color: 7ac043"><li>Blog</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<table style="margin-top: 15px">
						<tr>
							<td colspan="2" style="text-align: center"><a href="https://www.facebook.com/ecotiendaorganicaynatural/"
								data-toggle="tooltip" data-placement="bottom" title="Facebook"><img
									src="../../img/facebook_icon.png" class="redSocialFooter" /></a></td>
						</tr>
						<tr>
							<td><a href="https://twitter.com/Ecotiendagdl" data-toggle="tooltip" data-placement="bottom"
								title="Twitter"><img src="../../img/twitter_icon.png"
									class="redSocialFooter" /></a></td>
							<td><a href="https://web.stagram.com/ecotiendaorganica" data-toggle="tooltip" data-placement="bottom"
								title="Instagram"><img src="../../img/instagram_icon.png"
									class="redSocialFooter" /></a></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="row derechos" style="background-color: #E6E6E6;">&#169;
				EKOthazi S.L. 2005-2017. TODOS LOS DERECHOS RESERVADOS</div>
		</div>
	</div>
</footer>
</body>
</html>