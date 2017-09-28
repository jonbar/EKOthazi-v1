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
<link rel="stylesheet" type="text/css" href="../../css/inicio.css" media="screen" />
</head>
<body>
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
							<li><a href="../productos/productos.php">PRODUCTOS</a></li>
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
		<div class="row">
			<div class="col-sm-8">
				<div class="jumbotron">
					<h1>Lorem Ipsum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
						id lacinia ante, eget viverra sem. Integer ullamcorper massa sit
						amet auctor porta. Suspendisse fringilla, erat vitae pharetra
						vehicula, diam ante accumsan elit, eu vulputate libero sapien
						consectetur urna. Vestibulum convallis nunc lorem, a euismod quam
						suscipit vel. Vivamus fringilla pharetra tristique. Vivamus quis
						sollicitudin nisi. Vestibulum imperdiet, tellus id dignissim
						suscipit, metus justo tristique libero, non sodales lacus arcu
						vitae arcu. Nam et mollis velit.</p>
					<p>Proin et eros vitae turpis ornare pharetra eget sit amet ante.
						Morbi eu purus non metus maximus dictum. Vivamus mi orci,
						malesuada vel justo ac, bibendum faucibus felis. Phasellus nulla
						felis, mollis id felis in, suscipit consequat augue. Vestibulum
						viverra quam orci, pretium porttitor risus vestibulum vitae. Nunc
						tempor quam sem, nec commodo ante egestas suscipit. Duis
						ullamcorper accumsan lacinia. Curabitur vulputate facilisis nulla,
						at pharetra nisl tristique non. Praesent tincidunt ipsum nunc,
						quis consequat odio placerat et. Aenean fermentum vulputate massa,
						vel facilisis turpis egestas et. Interdum et malesuada fames ac
						ante ipsum primis in faucibus.</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<script>
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip();   
                    });
                    </script>
					
					<a href="../productos/productos.php" target="_blank" data-toggle="tooltip" title="Ver tienda"> 
					<img
						src="../../img/ecomarket.png" style="width: 50%">
					</a>
				</div>
				<div>
					<table>
						<td><a href="#"><img src="../../img/facebook_icon.png" class="redSocial"/></a></td>
						<td><a href="#"><img src="../../img/twitter_icon.png" class="redSocial"/></a></td>
						<td><a href="#"><img src="../../img/instagram_icon.png" class="redSocial"/></a></td>
					</table>
				</div>
				<div class="row">
					<div>
						<a class="twitter-timeline"
							href="https://twitter.com/hashtag/ecologico"
							data-widget-id="912648408506257408">Tweets sobre #ecologico</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],
p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+
"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
					</div>
				</div>
			</div>
		</div>
	<footer>
	
	</footer>
</body>
</html>
<?php
?>
