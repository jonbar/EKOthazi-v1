<!DOCTYPE html>
<html>
<title>Noticias</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/noticias.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<body class="w3-light-grey">	
   
    <?php     
        
        $link = mysqli_connect('localhost', 'root', '', 'ekothazi');                      
        $sql="SELECT u.nombre,e.titulo,e.cuerpo,e.fecha FROM usuarios u, entrada_blog e WHERE u.id=e.id_autor";
        $result=mysqli_query($link, $sql);
        
        echo "<div class='w3-col l8 s12'>";  
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        	echo "<div class='w3-card-4 w3-margin w3-white'>";
        		echo "<div class='w3-descripcion'>";
        			echo "<h5>".$row['nombre'].", "."<span class='w3-opacity'>".$row['fecha']."</span></h5>"; 
        			echo "<h3><b>".$row['titulo']."</b></h3>";     		       		
        			echo "<p>".$row['cuerpo']."</p>";
					echo "<br>";
				echo "</div>";
			echo "</div>";
        }   		
        echo "</div>";
        mysqli_free_result($result);
                
       ?>        
          
   
</body>
</html>
