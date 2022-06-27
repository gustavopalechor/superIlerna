<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Baja producto</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php 
	require "comprueba_sesion.php"


	?>
	<h1 id="titulo"><span>super</span>Ilerna</h1>

	<h3 class="subtitulos">Baja producto</h3>

	<div class="cajas" id="cajaAltaProducto">
	<form>
		<label for="codigoBarras">Codigo de barras</label>  
		<input type="text" name="codigoBarras" id="codigoBarras" /><br><br>


		<span id=botones>
		<input type="submit" name="bajaProducto" class="botonFormulario" id="bajaProducto" value="Baja producto" />
		</span>

	</form>
	</div>

</body>
</html>