<?php

    include("con_db.php");

    if(isset($_POST['submit'])){
        $nombre =$_POST["nombre"];
        $email=$_POST["email"];
        $telefono=$_POST["telefono"];
        $id= rand(1,99);

        $insertarDatos = "INSERT INTO datos_material VALUES('$nombre','$email','$telefono', '$id' )";

        $ejecutarInsertar = mysqli_query($conex, $insertarDatos);

        header('location:https://nutrienagsolutions.com.ar/expoagro/material.php');

        if(!$ejecutarInsertar){
            echo"Error En la linea de sql";
        }
    }
?>