<?php
	include('con_db.php');
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];

	session_start();

	$_SESSION['usuario'] = $usuario;

	$conex=mysqli_connect("localhost","root","","admntrar_nutrn_m");


	$consulta="SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";

	$resultado=mysqli_query($conex, $consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
		header('location: https://vps-1440221-x.dattaweb.com:2095/extra_soft/phpMyAdmin/sql.php?server=1&db=admntrar_nutrn_m&table=datos_material&pos=0');
		
	}else{
		?>
		<h1 class="bad">Los datos ingresados no son correctos</h1>
		<?php 
		
	}

	mysqli_free_result($resultado);
	mysqli_close($conex);


?>




