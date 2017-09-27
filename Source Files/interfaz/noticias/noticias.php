<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="../../css/noticias.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    	
    	
    	
    	    
        <div class="jumbotron text-center">
            <h1>Entradas</h1>            
        </div>
      <?php     
        
        $link = mysqli_connect('localhost', 'root', '', 'ekothazi');                      
        $sql="SELECT u.nombre,e.titulo,e.cuerpo,e.fecha FROM usuarios u, entrada_blog e WHERE u.id=e.id_autor";
        $result=mysqli_query($link, $sql);                  
             echo "<div class='entradas-blog'>";                                
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){                 
                        echo "<div class='col-sm-4'>";
                            echo "<h3>".$row['titulo']."</h3>";
                            echo "<p1>".$row['cuerpo']."</p1></br></br>";
                            echo "<p2>".$row['nombre']."  ".$row['fecha']."</p2>";
                        echo "</div>";                    
                }           
                echo "</div>";              
             
        mysqli_free_result($result);
                
        ?>        
    </body>
</html>