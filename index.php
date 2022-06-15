<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>superIlerna</title>

	<!-- Hoja de estilos -->

	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<!-- Titulo página -->
	<h1 id="titulo"><span>super</span>Ilerna</h1>

	<br><br>

	<!-- 
		Formulario para iniciar sesión
	-->
	<div class="cajas" id="cajaFormulario">
	<form action="comprueba_login.php" method="POST">

		<label for="login">Usuario</label>  
		<input type="text" name="login" id="login" /><br><br>

		<label for="password">Contraseña</label>
		<input type="password" name="password" id="password" /><br><br>

		<span id=botones>
		<input type="submit" name="entrar" class="botonFormulario" id="entrar" value="Entrar" /> &nbsp;
		<button id="registro"><a href="prueba.html">Registro </a> </button>
		</span>

	</form>
	</div>

	<!--
	<script type="text/javascript">
		
		var registro = document.getElementById('registro');
		registro.addEventListener('submit', function(argument) {
			window.location.href="https://www.google.es";
		});

	
	</script>
	-->
</body>
</html>