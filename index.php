<?php
/*
*************************************************
/				Autor: Pedro Arenas (Doc)		/
/				Archivo: index.php				/
*************************************************
*/
include './data/config.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $NAME_TITLE ?> | TS3 Iconos </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>

<br/><br/><br/>
<div class="container">
	<div class="row">
		<center>
		<div class="panel panel-primary" style="width: 300px;">
			<div class="panel-heading">
				<h3 class="panel-title" style="height: 16px;">Panel de iconos | TS3</h3>
			</div>
			<div class="panel-body" style="width: 300px;">
				<form role="form" name="formulario"method="POST"action="procesar.php">
					Ingrese su UID (UniqueID) de TS3 para poder asignarse rangos.<br/><br/>
					<div class="form-group">
					<label for="uniid">UniID:</label>
					<input type="text" id="uniid" name="uniid" class="form-control" placeholder="UID">
					</div>
					<button type="submit" class="btn btn-default">Buscar</button>
					<br/>

				</form>
			</div>
		</div>
		</center>
	</div>
</div>

</body>

<footer>
<center>
<p class="text-capitalize">Script hecho por <a href="http://twitter.com/MrDoc94">Doc</a> | Mediante la <a href="https://docs.planetteamspeak.com/ts3/php/framework/">TS3API</a></p>
</center>
</footer>
</html>