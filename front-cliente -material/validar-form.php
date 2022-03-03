<?php


	if(isset($_POST['submit'])){
		if (empty($nombre)){
			echo "<p class='error'> Agrega tu nombre </p>";
		} else{
			if(strlen($nombre) > 25){
				echo "<p class='error'> El nombre supera la cantidad de caracteres </p>"
			}
		}
		if (empty($email)){
			echo "<p class='error'> Agrega tu email </p>";
		} else {
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "<p class='error'> El email es incorrecto </p>";
			}

		}
		if (empty($telefono)){
			echo "<p class='error'> Agrega tu telefono </p>";
		}  else {
			if(!is_numeric($telefono)){
				"<p class='error'> El teléfono es incorrecto </p>"
			}
		}
	}


?>




