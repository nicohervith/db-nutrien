<?php

    include("con_db.php");

    if(isset($_POST['registrarse'])){
        $nombre =$_POST["nombre"];
        $email=$_POST["email"];
        $telefono=$_POST["telefono"];
        $id= rand(1,99);

        $insertarDatos = "INSERT INTO datos VALUES('$nombre','$email','$telefono', '$id' )";

        $ejecutarInsertar = mysqli_query($conex, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error En la linea de sql";
        }
    }
?>