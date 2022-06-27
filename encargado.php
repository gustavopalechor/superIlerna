<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Encargado</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php 
	require "comprueba_sesion.php"


	?>


	<h1 id="titulo"><span id="super">super</span>Ilerna</h1>
	<br>

	<?php  
	echo "<h3 class='subtitulos'>Bienvenido ".$_SESSION['usuario'] . "</h3>";

	?>
	<div class="cajas" id="cajaBotonesEncargado">
		<button class="botonesEncargado" id="botonAltaProducto" onclick="location.href='altaProducto.php'">Dar alta producto</button><br>
		<button class="botonesEncargado" id="botonBajaProducto" onclick="location.href='bajaProducto.php'">Dar baja producto</button><br>
		<button class="botonesEncargado" id="botonPedirProducto">Pedir producto</button><br>
		<button class="botonesEncargado" id="botonIncidencia">Enviar incidencia</button><br>

	</div>
	<br>
	<button onclick="location.href='cerrar_sesion.php'">Cerrar sesion</button>

</body>
</html>