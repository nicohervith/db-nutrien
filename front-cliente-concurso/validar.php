<?php
	include('con_db.php');
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];

	session_start();

	$_SESSION['usuario'] = $usuario;

	$conex=mysqli_connect("localhost","admntrar_nutrn1","nu7r13NAG","admntrar_nutrn1");


	$consulta="SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";

	$resultado=mysqli_query($conex, $consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
		header('location:mostrarc.php');
		
	}else{
		header("location:index.html");
		
	}

	mysqli_free_result($resultado);
	mysqli_close($conex);


?>




