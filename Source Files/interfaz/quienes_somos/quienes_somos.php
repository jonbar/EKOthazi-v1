<html lang="en">
<head>
<?php
session_start();

?>
<title>Quienes somos</title>
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
<link rel="stylesheet" type="text/css"
	href="../../css/quienes_somos.css" media="screen" />
<script src="../../javascript/quienes_somos.js"></script>
</head>
<body style="text-align: justify;">
	<header>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div background-color="green" class="navbar-header">
						<a href="../inicio/inicio.php"><img src="../../img/logo largo.png"
							style="height: 25%"></a>
					</div>
					<div class="container-fluid">
						<ul class="nav navbar-nav navbar-right">
						<?php
    if ($_SESSION == true) {
        $link = mysqli_connect('localhost', 'root', '', 'ekothazi');
        
        $sql = "SELECT * FROM `usuarios` WHERE email ='" . $_SESSION['username'] . "'";
        mysqli_set_charset($link, "utf8"); /* Procedural approach */
        
        $result = mysqli_query($link, $sql);
        
        $row = mysqli_fetch_array($result);
        echo 'Hola, ' . $row['nombre'] . ' ' . $row['apellido'];
        ?>  
                                <a href="../inicio/logout.php"> <span
								class="glyphicon glyphicon-log-out"></span>
							</a>

                                <?php
    } else {
        ?>
                                <li>
								<button type="button" class="btn btn-link" data-toggle="modal"
									data-target="#myModal">
									<span class="glyphicon glyphicon-log-in"></span> Iniciar sesion
								</button>
							</li>
                                <?php
    }
    ?>
							
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
									<form name="encuesta" action="../inicio/validacion.php"
										method="POST" onsubmit="return enviar()">
										<label for="input">Correo electronico:</label><br> 
										<input type="text" class="form-control" name="correo" id="correo"
											onKeyPress="return comprobarArroba(event)"
											required="required" /><br> 
										<label for="input">Conraseña: </label><br>
										<input type="password" class="form-control" id="clave" name="clave"
											required="required"/>
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

				<div class="col-sm-5" style="margin-top: 30px">
					<p>
						<span class="glyphicon glyphicon-map-marker"></span> Urritxe Kalea
						13,<br> 48340 Amorebieta-Etxano, Vizcaya.
					</p>
					<p>
						<span class="glyphicon glyphicon-phone"></span> +946 82 94 65
					</p>
					<p>
						<span class="glyphicon glyphicon-envelope"></span>
						ethazitalde1@gmail.com
					</p>
					<p>
						<span class="glyphicon glyphicon-time"></span></br>
						</br> - Lunes a Viernes: 9:00 a 14:30 y 16:30 a 20:30 </br> -
						Sábado: 9:00 a 14:00
					</p>

					<h4 style="margin-top: 35px; color: green">Contacta con nosotros</h4>

					<div class="row">
						<form action="envio_mensaje.php" method="POST">
							<div class="col-sm-5 form-group">
								<input class="form-control" id="nombre" name="nombre"
									placeholder="Nombre" type="text" required>
							</div>
							<div class="col-sm-7 form-group">
								<input class="form-control" id="email" name="email"
									placeholder="Correo electrónico" type="email" required>
							</div>

							<textarea class="form-control" id="comentario"
								style="resize: none" name="comentario"
								placeholder="Comentario..." rows="5"></textarea>


							<div class="row">
								<div class="col-sm-12 form-group">
									<button class="btn btn-default pull-right" type="submit">Enviar</button>
								</div>
							</div>
						</form>
					</div>

				</div>


				<div class="col-sm-7" id="googleMap" ; width="500px"
					; height="400px;">

					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d181.70960499705856!2d-2.7253561794540224!3d43.22304380391802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e369c4e0d1637%3A0x78ccbf7525105ab1!2sCIFP+ZORNOTZA+LHII!5e0!3m2!1ses!2ses!4v1507547631781"
						width="600" height="450" frameborder="0" style="border: 0"
						allowfullscreen></iframe>
				</div>




			</div>
			<div id="menu1" class="tab-pane fade">
				<div>
					<h3 style="color: green">Huertos ecológicos en Urritxe,
						Amorebieta-Etxano</h3>
					<div class="slideshow-container">

						<div class="mySlides">
							<div class="numbertext">1 / 3</div>
							<img src="../../img/huerto_eco01.jpg" style="width: 100%">
							<div class="text">Terrenos individuales para los vecinos de
								Urritxe.</div>
						</div>

						<div class="mySlides">
							<div class="numbertext">2 / 3</div>
							<img src="../../img/huerto_eco02.jpg" style="width: 100%">
							<div class="text">Algunas de las verduras cosechadas el último
								año.</div>
						</div>

						<div class="mySlides">
							<div class="numbertext">3 / 3</div>
							<img src="../../img/huerto_eco03.jpg" style="width: 100%">
							<div class="text">Huerto del vecino Iñaki, lechugas, coles..</div>
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
				<h3 style="color: green">Nueva tienda ecológica en Zubiaurre,
					Iurreta</h3>
				<div class="row">
					<div class="column">
						<div class="content">
							<img src="../../img/tienda_eco.jpg" alt="tienda_eco"
								style="width: 100%">
							<h3>Instalaciones</h3>
							<p>Una tienda pensada para el disfrute de sus consumidores, con
								unas instalaciones sencillas y luminosas, un ambiente agradable
								para que la experiencia de compra sea óptima.</p>
						</div>
					</div>
					<div class="column">
						<div class="content">
							<img src="../../img/tienda_eco1.jpg" alt="tienda_eco1"
								style="width: 100%">
							<h3>Cero envases</h3>
							<p>La idea nace de minimizar los residuos de plástico, utilizando
								envases como botes de cristal, de plástico duro o metálicos que
								podemos llevar a la tienda y rellenarlos con los productos que
								compremos.</p>
						</div>
					</div>
					<div class="column">
						<div class="content">
							<img src="../../img/tienda_eco2.jpg" alt="tienda_eco2"
								style="width: 100%">
							<h3>Productos a granel</h3>
							<p>Un espacio pensado para traer un bote y rellenarlo de pasta,
								legumbres, frutos secos, cereales, especias... la sección de
								alimentos a granel que hace de la tienda un espacio llamativo e
								innovador.</p>
						</div>
					</div>
					<div class="column">
						<div class="content">
							<img src="../../img/tienda_eco3.jpg" alt="tienda_eco3"
								style="width: 100%">
							<h3>Directo de la huerta</h3>
							<p>Las frutas y verduras llegan de la huerta a la tienda sin
								conservantes ni pesticidas. La manera más sana de consumir estos
								alimentos llenos de propiedades, sin envases de plástico ni
								bandejas.</p>
						</div>
					</div>

					
				</div>
			</div>


			<div id="menu2" class="tab-pane fade">

				<div style="margin-left: 100px; margin-bottom: 130px;"
					class="container-fluid">
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

				</div>
			</div>

			<div id="menu3" class="tab-pane fade">
				<p>
				
				
				<div class="row" style="margin-top: 50px; text-align: center;">
					<div class="col-sm-3">
						<a href="#foto1" data-toggle="collapse"> <img
							src="../../img/foto1-curriculum.jpg" class="img-circle person"
							alt="foto1" width="150" height="150">
						</a>
						<div id="foto1" class="collapse">
							<p>
								<b>Jon Barrutieta</b>
							</p>
							<p>Siento que nuestro progreso espiritual demanda que se detenga
								la matanza de nuestro prójimo animal para la satisfacción de
								nuestros deseos corporales.</p>
						</div>
					</div>

					<div class="col-sm-3">
						<a href="#foto2" data-toggle="collapse"> <img
							src="../../img/foto2-curriculum.jpg" class="img-circle person"
							alt="foto2" width="150" height="150">
						</a>
						<div id="foto2" class="collapse">
							<p>
								<b>Leire Blanco</b>
							</p>
							<p>Nutricionista y dietista en Durango. "Mens sana in corpore
								sano", es su lema. Dice que desde que ha cambiado los hábitos
								alimenticios, se siente mejor consigo misma.</p>
						</div>
					</div>

					<div class="col-sm-3">
						<a href="#foto3" data-toggle="collapse"> <img
							src="../../img/foto3-curriculum.jpg" class="img-circle person"
							alt="foto3" width="150" height="150">
						</a>
						<div id="foto3" class="collapse">
							<p>
								<b>Gorka Cañon</b>
							</p>
							<p>Cuando el último árbol se ha cortado, el último río sea
								envenenado, el último pez pescado, sólo entonces el hombre
								descubrirá que el dinero no se come.</p>
						</div>
					</div>


				</div>

				<p>
				
				
				<div class="row" style="margin-bottom: 50px; text-align: center">

					<div class="col-sm-3">
						<a href="#foto4" data-toggle="collapse"> <img
							src="../../img/foto4-curriculum.jpg" class="img-circle person"
							alt="foto4" width="150" height="150">
						</a>
						<div id="foto4" class="collapse">
							<p>
								<b>Iker Larrea</b>
							</p>
							<p>Una sociedad se define no sólo por lo que crea, sino por lo que se niega 
							a destruir. Si no reciclas, reusa. Si no reusas, recicla.</p>
						</div>
					</div>


					<div class="col-sm-3">
						<a href="#foto5" data-toggle="collapse"> <img
							src="../../img/foto5-curriculum.jpg" class="img-circle person"
							alt="foto5" width="150" height="150">
						</a>
						<div id="foto5" class="collapse">
							<p>
								<b>Nerea Unzueta</b>
							</p>
							<p>Máster en energías renovables. La verdadera riqueza consiste en saber 
							prescindir de las cosas superfluas.</p>
						</div>
					</div>

					<div class="col-sm-3">
						<a href="#foto6" data-toggle="collapse"> <img
							src="../../img/foto6-curriculum.jpg" class="img-circle person"
							alt="foto6" width="150" height="150">
						</a>
						<div id="foto6" class="collapse">
							<p>
								<b>Endika Basabe</b>
							</p>
							<p>Biologo profesional, con experiencia en el sector de los
								productos ecológicos preparado para ofrecer la información
								necesaria a los clientes.</p>
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
					<h4 style="color: 7ac043">Conócenos</h4>
					<ul>

						<li><a href="../quienes_somos/quienes_somos.php"
							style="color: 7ac043">Contacto</a></li>
						<li><a href="../noticias/noticias.php" style="color: 7ac043">Blog</a></li>

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
				<div class=" derechos col-sm-12" style="background-color: #E6E6E6;">&#169;
					EKOthazi S.L. 2005-2017. TODOS LOS DERECHOS RESERVADOS</div>
			</div>
		</div>

	</div>
</footer>
</html>


