<?php


    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="admntrar_nutrn_m";

    $conex = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$conex){
        echo"Error en la conexion con el servidor";
    }

    
?>