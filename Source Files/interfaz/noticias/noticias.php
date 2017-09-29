<!DOCTYPE html>
<html>
<title>Noticias</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/noticias.css">
<link rel="stylesheet" href="../../css/inicio.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<body class="w3-light-grey">

<header>


</header>	
   <?php     
        
        $link = mysqli_connect('localhost', 'root', '', 'ekothazi');                      
        $sql="SELECT u.nombre,e.titulo,e.cuerpo,e.fecha FROM usuarios u, entrada_blog e WHERE u.id=e.id_autor";
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
   
<footer class="w3-container w3-light-grey w3-padding-32 w3-margin-top">
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
				<div class="row derechos" style="background-color: #E6E6E6;">
					&#169; EKOthazi S.L. 2005-2017. TODOS LOS DERECHOS RESERVADOS
				</div>
</footer>       

</body>
</html>
