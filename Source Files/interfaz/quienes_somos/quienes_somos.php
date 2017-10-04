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
<link rel="stylesheet" type="text/css" href="../../css/galeria.css"
	media="screen" />
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
							<li><a href="../inicio/inicio.php">INICIO</a></li>
							<li class="active"><a href="#">QUIENES SOMOS</a></li>
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
											<label for="email">Dirección de correo electrónico:</label>
											<input type="email" class="form-control" id="email">
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
			<li><a class="menuQuienesSomos" href="#menu1">Últimos proyectos</a></li>
			<li><a class="menuQuienesSomos" href="#menu2">Filosofía de empresa</a></li>
			<li><a class="menuQuienesSomos" href="#menu3">Equipo humano</a></li>
		</ul>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">

				<br>

				<div class="col-sm-5">
					<p>
						<span class="glyphicon glyphicon-map-marker"></span> Amorebieta,
						Vizcaya
					</p>
					<p>
						<span class="glyphicon glyphicon-phone"></span> +94 4896532
					</p>
					<p>
						<span class="glyphicon glyphicon-envelope"></span>
						ethazitalde1@gmail.com
					</p>
				</div>

				<div class="col-sm-7 slideanim">
					<div class="row">
						<div class="col-sm-6 form-group">
							<input class="form-control" id="nombre" name="nombre"
								placeholder="Nombre" type="text" required>
						</div>
						<div class="col-sm-6 form-group">
							<input class="form-control" id="email" name="email"
								placeholder="Correo electrónico" type="email" required>
						</div>
					</div>
					<textarea class="form-control" id="comments" name="comments"
						placeholder="Comentarios" rows="5"></textarea>
					<br>

					<div class="row">
						<div class="col-sm-12 form-group">
							<button class="btn btn-default pull-right" type="submit">Enviar</button>
						</div>
					</div>
				</div>
			</div>
			<div id="menu1" class="tab-pane fade">
				<div>
					<h3 style="color: green">Huertos ecologicos en Urritxe,
						Amorebieta-Etxano</h3>
					<div class="slideshow-container">

						<div class="mySlides">
							<div class="numbertext">1 / 3</div>
							<img src="../../img/huerto_eco01.jpg" style="width: 100%">
							<div class="text">huerto</div>
						</div>

						<div class="mySlides">
							<div class="numbertext">2 / 3</div>
							<img src="../../img/huerto_eco02.jpg" style="width: 100%">
							<div class="text">huerto2</div>
						</div>

						<div class="mySlides">
							<div class="numbertext">3 / 3</div>
							<img src="../../img/huerto_eco03.jpg" style="width: 100%">
							<div class="text">huerto3</div>
						</div>

						<a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a
							class="next" onclick="plusSlides(1)">&#10095;</a>

					</div>
				</div>
				<script>
                    var slideIndex = 1;
                    showSlides(slideIndex);
                    
                    function plusSlides(n) {
                      showSlides(slideIndex += n);
                    }
                    
                    function currentSlide(n) {
                      showSlides(slideIndex = n);
                    }
                    
                    function showSlides(n) {
                      var i;
                      var slides = document.getElementsByClassName("mySlides");
                      var dots = document.getElementsByClassName("dot");
                      if (n > slides.length) {slideIndex = 1}    
                      if (n < 1) {slideIndex = slides.length}
                      for (i = 0; i < slides.length; i++) {
                          slides[i].style.display = "none";  
                      }
                      for (i = 0; i < dots.length; i++) {
                          dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                      dots[slideIndex-1].className += " active";
                    }
                    </script>
				<div class="row">
					<div class="column">
						<div class="content">
							<img src="../../img/ecoworld.jpg" alt="Mountains" style="width: 100%">
							<h3>My Work</h3>
							<p>Lorem ipsum dolor sit amet, tempor prodesset eos no.
								Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem
								ipsum dolor sit amet, tempor prodesset eos no.</p>
						</div>
					</div>
					<div class="column">
						<div class="content">
							<img src="../../img/ecoworld.jpg" alt="Lights" style="width: 100%">
							<h3>My Work</h3>
							<p>Lorem ipsum dolor sit amet, tempor prodesset eos no.
								Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem
								ipsum dolor sit amet, tempor prodesset eos no.</p>
						</div>
					</div>
					<div class="column">
						<div class="content">
							<img src="../../img/ecoworld.jpg" alt="Nature" style="width: 100%">
							<h3>My Work</h3>
							<p>Lorem ipsum dolor sit amet, tempor prodesset eos no.
								Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem
								ipsum dolor sit amet, tempor prodesset eos no.</p>
						</div>
					</div>
					<div class="column">
						<div class="content">
							<img src="../../img/ecoworld.jpg" alt="Mountains" style="width: 100%">
							<h3>My Work</h3>
							<p>Lorem ipsum dolor sit amet, tempor prodesset eos no.
								Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem
								ipsum dolor sit amet, tempor prodesset eos no.</p>
						</div>
					</div>
					<div class="column">
						<div class="content">
							<img src="../../img/ecoworld.jpg" alt="Mountains" style="width: 100%">
							<h3>My Work</h3>
							<p>Lorem ipsum dolor sit amet, tempor prodesset eos no.
								Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem
								ipsum dolor sit amet, tempor prodesset eos no.</p>
						</div>
					</div>
					<!-- END GRID -->
				</div>
			</div>


			<div id="menu2" class="tab-pane fade">
				<br> <br> <br>
				<div style="margin-left: 100px;" class="container-fluid">
					<div class="row content">
						<div class="col-sm-5 sidenav">
							<h3>Quienes somos</h3>
							<p>
								Somos un negocio que pretende cubrir un mercado selecto de
								personas interesadas en mejorar su salud por medio del consumo
								de productos naturales y/o lo menos elaborados posibles. </br> </br>
							</p>
							<img src="../../img/ecofriendly.jpg"
								style="width: 50%; margin-left: 100px">
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
								<li>Ser reconocidos como una fuente honesta de productos
									naturales, sanos y alimentos orgánicos.</li>
								<li>Construir una plataforma lo más completa posible con
									productos que favorezcan un estilo de vida sano y sostenible.</li>
								<li>Estar siempre actualizados y que nuestros productos suplan
									las necesidades de nuestros clientes.</li>
								<li>Ofrecer el mejor asesoramiento y servicio. Ser rápidos y
									eficaces.</li>
							</ul>
						</div>
					</div>
					<br> <br> <br> <br>
				</div>
			</div>

			<div id="menu3" class="tab-pane fade">
				<p>
				
				
				<div class="row" style="margin-top: 50px; text-align: center">
					<div class="col-sm-3">
						<a href="#foto1" data-toggle="collapse"> <img
							src="../../img/foto1-curriculum.jpg" class="img-circle person"
							alt="foto1" width="150" height="150">
						</a>
						<div id="foto1" class="collapse">
							<p>
								<strong> Me gusta el mariscoooo, odio las hortalizas </strong>
							</p>
							<p>
								<strong> Puta vidaaa </strong>
							</p>
						</div>
					</div>

					<div class="col-sm-3">
						<a href="#foto2" data-toggle="collapse"> <img
							src="../../img/jon_vegano.jpg" class="img-circle person"
							alt="foto2" width="150" height="150">
						</a>
						<div id="foto2" class="collapse">
							<p>
								<strong> Soy venago de nacimiento </strong>
							</p>
							<p>
								<strong> beber leche = una vaca violada </strong>
							</p>
						</div>
					</div>

					<div class="col-sm-3">
						<a href="#foto3" data-toggle="collapse"> <img
							src="../../img/foto3-curriculum.jpg" class="img-circle person"
							alt="foto3" width="150" height="150">
						</a>
						<div id="foto3" class="collapse">
							<p>
								<strong> Tentazioneee</strong>
							</p>
							<p>
								<strong> Look at ME ! </strong>
							</p>
						</div>
					</div>

					<div class="col-sm-3">
						<a href="#foto4" data-toggle="collapse"> <img
							src="../../img/foto4-curriculum.jpg" class="img-circle person"
							alt="foto4" width="150" height="150">
						</a>
						<div id="foto4" class="collapse">
							<p>
								<strong> Lil boat </strong>
							</p>
							<p>
								<strong> I like pizza </strong>
							</p>
						</div>
					</div>
				</div>

				<p>
				
				
				<div class="row" style="margin-bottom: 50px; text-align: center">
					<div class="col-sm-3">
						<a href="#foto5" data-toggle="collapse"> <img
							src="../../img/foto5-curriculum.jpg" class="img-circle person"
							alt="foto5" width="150" height="150">
						</a>
						<div id="foto5" class="collapse">
							<p>
								<strong></strong>
							</p>
							<p>
								<strong> Llevo una cebolla roja en la cabeza </strong>
							</p>
						</div>
					</div>

					<div class="col-sm-3">
						<a href="#foto6" data-toggle="collapse"> <img
							src="../../img/foto6-curriculum.jpg" class="img-circle person"
							alt="foto6" width="150" height="150">
						</a>
						<div id="foto6" class="collapse">
							<p>
								<strong> 21,21,21 </strong>
							</p>
							<p>
								<strong> ISSA knife </strong>
							</p>
						</div>
					</div>

					<div class="col-sm-3">
						<a href="#foto7" data-toggle="collapse"> <img
							src="../../img/foto7-curriculum.jpg" class="img-circle person"
							alt="foto7" width="150" height="150">
						</a>
						<div id="foto7" class="collapse">
							<p>
								<strong> </strong>
							</p>
							<p>
								<strong> Kodak Black, BOdak Yellow </strong>
							</p>
						</div>
					</div>

					<div class="col-sm-3">
						<a href="#foto8" data-toggle="collapse"> <img
							src="../../img/foto8-curriculum.jpg" class="img-circle person"
							alt="foto8" width="150" height="150">
						</a>
						<div id="foto8" class="collapse">

							<p>
								<strong> Gang , BANG </strong>
							</p>
						</div>
					</div>
				</div>
				<p>
			
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
	</div>

</footer>
</html>


