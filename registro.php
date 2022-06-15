<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<h1 id="titulo"><span>super</span>Ilerna</h1>

	<h3 class="subtitulos">Registro</h3>

	<br><br>
	<div class="cajas">
	<form>
		<label for="nombreEncargado">Nombre</label>  
		<input type="text" name="nombreEncargado" id="nombreEncargado" /><br><br>

		<label for="apellidosEncargado">Apellidos</label>
		<input type="text" name="apellidosEncargado" id="apellidosEncargado" /><br><br>

		<label for="dniEncargado">Contraseña</label>
		<input type="text" name="dniEncargado" id="dniEncargado" /><br><br>

		<label for="idEncargado">NºID</label>
		<input type="number" name="idEncargado" id="idEncargado" /><br><br>

		<span id=botones>
		<input type="submit" name="enviarSolicitud" class="botonFormulario" id="enviarSolicitud" value="Enviar solicitud registro" /> 
		</span>

	</form>
	</div>

</body>
</html>