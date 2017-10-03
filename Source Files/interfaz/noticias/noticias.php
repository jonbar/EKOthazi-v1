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
<link rel="stylesheet" type="text/css" href="../../css/inicio.css"
	media="screen" />
<link rel="stylesheet" type="text/css" href="../../css/general.css"
	media="screen" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	
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
							<li ><a href="../inicio/inicio.php">INICIO</a></li>
							<li><a href="../quienes_somos/quienes_somos.php">QUIENES SOMOS</a></li>
							<li class="active"><a href="#">NOTICIAS</a></li>
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
											<label for="email">Correo electronico:</label> <input
												type="email" class="form-control" id="email">
										</div>
										<div class="form-group">
											<label for="pwd">Contrase&#241;a:</label> <input
												type="password" class="form-control" id="pwd">
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
			<?php     
        
        $link = mysqli_connect('localhost', 'root', '', 'ekothazi');                      
        $sql="SELECT u.nombre,e.titulo,e.cuerpo,e.fecha FROM usuarios u, entrada_blog e WHERE u.id=e.id_autor ORDER BY id_entrada DESC";
        mysqli_set_charset($link, "utf8"); /* Procedural approach */
        $link->set_charset("utf8"); 
        $result=mysqli_query($link, $sql);
        
        
        
        echo "<div class='w3-col l8 s12'>";  
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        	echo "<div class='w3-card-4 w3-margin w3-white'>";
        		echo "<div class='w3-container'>";
        			echo "<h3><b>".$row['titulo']."</b></h3>";  
        			echo "<h5>".$row['nombre'].", "."<span class='w3-opacity'>".$row['fecha']."</span></h5>";         			  		       		
        			echo "<p>".$row['cuerpo']."</p>";
					echo "<br>";
				echo "</div>";
			echo "</div>";
        }   		
        echo "</div>";
        mysqli_free_result($result);
                
      ?>
		</div>
	
		<footer>
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
					<div class="col-sm-2">
						<table style="margin-top: 15px">
							<tr>
								<td colspan="2" style="text-align: center"><a href="#" data-toggle="tooltip" data-placement="bottom"
									title="Facebook"><img src="../../img/facebook_icon.png"
										class="redSocialFooter" /></a></td>
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
</div>
</body>
</html>
<?php
?>