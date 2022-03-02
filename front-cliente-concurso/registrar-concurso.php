<?php

    include("con_db.php");

    if(isset($_POST['registrarse'])){
        $nombre =$_POST["nombre"];
        $email=$_POST["email"];
        $telefono=$_POST["telefono"];
        $empresa=$_POST["empresa"];
        $instagram=$_POST["instagram"];
        $mensaje=$_POST["mensaje"];
        $id= rand(1,99);

        $insertarDatos = "INSERT INTO datos_concurso VALUES('$nombre','$email','$telefono','$empresa', '$instagram', '$mensaje' , '$id' )";

        $ejecutarInsertar = mysqli_query($conex, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error En la linea de sql";
        }
    }
?>