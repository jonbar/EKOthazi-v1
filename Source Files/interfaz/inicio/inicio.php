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
</head>
<body>
	<!-- registro con boostrap -->
	<div class="input-group">
		<span class="input-group-addon"></span>
		<div class="container">
			<h2>INICIO DE SESION</h2>
			<form action="registrar.php">
				<div class="form-group">
					<label for="email">Email:</label> <input type="email"
						class="form-control" id="email" placeholder="email" name="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label> <input type="password"
						class="form-control" id="pwd" placeholder="Contraseña" name="pwd">
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="remember"> Remember me</label>
				</div>
				<button type="submit" class="btn btn-default" name="enviar"
					value="enviar">Submit</button>
			</form>
		</div>
	</div>
	<!-- twiter -->
	<div class="row">
		<div class="col-md-3">
			<div style="position: fixed; left: 79.1%;">
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
	<!-- imagen -->
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="EcoMarketing-logo-1-300x300.PNG" target="_blank"> <img
					src="C:\Users\ikaslea\eclipse-workspace\EKOthazi\Source Files\img\EcoMarketing-logo-1-300x300.png" style="width: 50%">
					<div class="caption">
						<p></p>
					</div>
				</a>

</body>
</html>
<?php
?>
