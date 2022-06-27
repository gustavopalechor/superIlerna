<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php  
	try{
		$base= new PDO("mysql:host=localhost; dbname=superilerna", "root", "");

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";

		$resultado=$base->prepare($sql);

		$login=htmlentities(addslashes($_POST["login"]));
		$password=htmlentities(addslashes($_POST["contraseña"]));

		$resultado->bindValue(":login", $login);
		$resultado->bindValue(":password", $password);

		$resultado->execute();

		$numero_registro=$resultado->rowCount();

		if ($numero_registro!=0) {
			session_start();
			$_SESSION['usuario']=$_POST['login'];

			header("location:encargado.php");
		}
		else{

			header("location:index.php");

		}


	}
	catch(Exception $e){
		die("Error: " . $e->getCode());
	}
?>	

</body>
</html>