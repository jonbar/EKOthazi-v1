<html lang="en">
<head>
<?php
session_start();

?>
<title>Noticias</title>
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
<link rel="stylesheet" type="text/css" href="../../css/noticias.css"
	media="screen" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	
</head>
<body style="text-align: justify;">
		<header>
		<div class="container">
			<nav class="navbar navbar-default">

					<div class="navbar-header">
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
                                <a href="../inicio/logout.php">
                                    <span class="glyphicon glyphicon-log-out"></span>
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
							<li ><a href="../inicio/inicio.php">INICIO</a></li>
							<li><a href="../quienes_somos/quienes_somos.php">QUIENES SOMOS</a></li>
							<li class="active"><a href="../noticias/noticias.php">NOTICIAS</a></li>
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
									<form name="encuesta" action="../inicio/validacion.php" method="POST"
										onsubmit="return enviar()">
										<div class="form-group">
											<label for="input">Cuenta de correo </label> <input
												type="text" name="correo" id="correo"
												onKeyPress="return comprobarArroba(event)"
												required="required" />
										</div>
										<div class="form-group">
											<label for="input">Introduzca clave de acceso </label><input
												type="password" id="clave" name="clave" required="required" />
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

			</nav>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<?php   
			
			if ($_SESSION == true) {
			    $link = mysqli_connect('localhost', 'root', '', 'ekothazi');
			    
			    $sql = "SELECT * FROM `usuarios` WHERE email ='" . $_SESSION['username'] . "'";
			    mysqli_set_charset($link, "utf8"); /* Procedural approach */
			    
			    $result = mysqli_query($link, $sql);
			    
			    $row = mysqli_fetch_array($result);
			    if($row['rol'] == 'admin'){
			        ?>
			        <div class="container">
			        <div class='media well' style='background-color: white; text-align: center'>
			        	<input type="button" id="creacionEntrada" name="creacionEntrada" value="Crear una nueva entrada"/>
			        	<select name="comboEntrada"> 
			        	<?php 
			        	$link = mysqli_connect('localhost', 'root', '', 'ekothazi');
			        	$sql="SELECT * FROM entrada_blog ";
			        	mysqli_set_charset($link, "utf8");
			        	$result=mysqli_query($link, $sql);
			        	
			        	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			        	    echo '<option value="' . $row['id_entrada'] . '">' . $row['titulo'] . '</option>'; 
			        	}
                        ?>
                        </select> 
                        <input type="button" name="borrar" id="borrar" value="Borrar">
                    </div>
			        </div>
			        <?php 
			    }elseif ($row['rol'] == 'user'){
			        ?>
			        <div class='media well' style='background-color: white; text-align: center'>
			        <div class="container">
			        	<input type="button" id="creacionEntrada" name="creacionEntrada" style="border-radius: 5px" value="Crear una nueva entrada"/>
			        </div>
			        </div>
			        <?php 
			    }
			}

			
			
			/*--
			$link -> Conexion con la base de datos.
			$sql -> sentencia sql.
			*/
        $link = mysqli_connect('localhost', 'root', '', 'ekothazi');                      
        $sql="SELECT u.nombre,e.titulo,e.cuerpo,e.fecha, e.imagen1 FROM usuarios u, entrada_blog e WHERE u.id=e.id_autor ORDER BY id_entrada DESC";
        mysqli_set_charset($link, "utf8");
        $result=mysqli_query($link, $sql);
        
        
        /*
        - Recorre la Array de row y saca todas las noticias de la base de datos.
        - saca un div (class = media well) por cada noticia ya con el formato dado.
        
        row -> Array list con todas las noticias.
        */
        echo "<div class='container'>";  
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        	echo "<div class='media well' style='background-color: white'>";
        	   echo "<h3 class='media-heading'><b>".$row['titulo']."</b></h3>"; 
        		echo "<div class='media-body' >";
        			 
        			echo "<h5>".$row['nombre'].", "."<span class='w3-opacity'>".$row['fecha']."</span></h5>";         			  		       		
        			echo "<p>".$row['cuerpo']."</p>";
					echo "<br>";
				echo "</div>";
				echo "<div class='media-right'>";
				echo "<img src='" . $row['imagen1'] . "' class='media-object imagenNoticia'>";
			    echo "</div>";
			echo "</div>";
        }   		
        echo "</div>";
        /* 
         - Liberacion $result para evitar errores.
         
         $result ->  ejecucion de la consulta.
         */
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
		</footer>
</div>
</body>
</html>
<?php
?>