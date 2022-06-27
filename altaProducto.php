<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta producto</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php 
	require "comprueba_sesion.php"


	?>
	<h1 id="titulo"><span>super</span>Ilerna</h1>

	<h3 class="subtitulos">Alta producto</h3>

	<br><br>
	<div class="cajas" id="cajaAltaProducto">
	<form>
		<label for="nombreProducto">Nombre</label>  
		<input type="text" name="nombreProducto" id="nombreProducto" /><br><br>

		<label for="descripcionProducto">Descripción</label>
		<input type="text" name="descripcionProducto" id="descripcionProducto" /><br><br>

		<label for="codigoBarras">Codigo de barras</label>
		<input type="number" name="codigoBarras" id="codigoBarras" /><br><br>

		<label for="precioProducto">Precio</label>
		<input type="number" name="precioProducto" id="precioProducto" /><br><br>

		<span id=botones>
		<input type="submit" name="altaProducto" class="botonFormulario" id="altaProducto" value="Alta producto" /> 
		</span>

	</form>
	</div>

	<br>
	<button onclick="location.href='encargado.php'">volver</button>
	<button onclick="location.href='cerrar_sesion.php'">Cerrar sesion</button>

</body>
</html>