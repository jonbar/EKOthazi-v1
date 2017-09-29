<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../../css/inicio.css">


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
							<li class="dropdown"><a class="dropdown-toggle"
								data-toggle="dropdown" href="#">QUIENES SOMOS <span
									class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Donde encontrarnos</a></li>
									<li><a href="#">Nuestros proyectos</a></li>
									<li><a href="#">Politica de empresa</a></li>
									<li><a href="#">Equipo humano</a></li>
								</ul></li>
							<li><a href="#">NOTICIAS</a></li>
							<li><a href="#">PRODUCTOS</a></li>
						</ul>
					</div>
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Inicio de sesion</h4>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="email">Direccion de correo electronico:</label> <input
												type="email" class="form-control" id="email">
										</div>
										<div class="form-group">
											<label for="pwd">Contraseña:</label> <input type="password"
												class="form-control" id="pwd">
										</div>
										<div class="checkbox">
											<label><input type="checkbox"> Recordarme en esta pagina</label>
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
		<ul class="nav nav-tabs">
			<li class="active"><a class="menuQuienesSomos" href="#home">Donde
					encontrarnos</a></li>
			<li><a class="menuQuienesSomos" href="#menu1">Ultimos proyectos</a></li>
			<li><a class="menuQuienesSomos" href="#menu2">Politica de empresa</a></li>
			<li><a class="menuQuienesSomos" href="#menu3">Equipo humano</a></li>
		</ul>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<p>PAGINA DE CONTACTOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO</p>
			</div>
			<div id="menu1" class="tab-pane fade">
				<p>GALERIA CON IMAGENES DE ULTIMOS PROYECTOS</p>
			</div>
			<div id="menu2" class="tab-pane fade">
				<div  style="margin-left: 100px;" class="container-fluid">
					<div class="row content">
						<div class="col-sm-5 sidenav">
							<h3>Quienes somos</h3>
							<p>
								Somos un negocio que pretende cubrir un mercado selecto de
								personas interesadas en mejorar su salud por medio del consumo
								de productos naturales y/o lo menos elaborados posibles. </br> </br>
							</p>
							<img src="../../img/ecofriendly.jpg" style="width: 50%">
							</div>
							<div class="col-sm-5">
					
							<h3>Misión</h3>
							<p>
								Ofrecer a nuestros clientes la alternativa y acceso a productos
								naturales, alimentos orgánicos y cualquier otro producto que
								ayude a mejorar su salud, con especial énfasis en la promoción
								de los productos del País Vasco. </br> </br>
							</p>
							<h3>Visión</h3>
							<ul>
							<li>
								Ser reconocidos como una fuente honesta de productos naturales,
								sanos y alimentos orgánicos.
							</li>
							<li>
								Construir una plataforma lo más completa posible con productos
								que favorezcan un estilo de vida sano y sostenible.
							</li>
							<li>
								Estar siempre actualizados y que nuestros productos suplan las
								necesidades de nuestros clientes.
							</li>
							<li>
								Ofrecer el mejor asesoramiento y servicio. Ser rápidos y
								eficaces.
							</li>
							</ul>
						</div>
						</div>
						
					</div>
				</div>

			</div>
			<div id="menu3" class="tab-pane fade">
				<p>CURRICULUMSSSSSSSSSSSS</p>
			</div>
		</div>
	</div>

	<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>

</body>
<footer>
<div class="container">
	<div class="container-fluid">
		<div class="row" style="background-color: #E6E6E6;">
			<div class="col-sm-4">
				<img src="../../img/logoLargoFooter.png" class="imagenFooter">
			</div>
			<div class="col-sm-3">
				<h4 style="color: 7ac043;">Informacion</h4>
				<ul style="color: 7ac043">
					<li>Aviso legal</li>
					<li>Preguntas frecuentes</li>
					<li>Trabaja con nosotros</li>
					<li>Envios y devoluciones</li>
				</ul>
			</div>
			<div class="col-sm-3">
				<h4 style="color: 7ac043">Visita nuestro blog</h4>
				<ul>
					<li style="color: 7ac043">Blog</li>
				</ul>
			</div>
		</div>
		<div class="row derechos" style="background-color: #E6E6E6;">&#169;
			EKOthazi S.L. 2005-2017. TODOS LOS DERECHOS RESERVADOS</div>
	</div>
	</div>
</footer>
</html>


