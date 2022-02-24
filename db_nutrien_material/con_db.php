<?php


    $servidor=" nutrienagsolutions.com.ar";
    $usuario="root";
    $clave="nu7r13NAG";
    $baseDeDatos="admntrar_nutrn_m";

    $conex = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$conex){
        echo"Error en la conexion con el servidor";
    }

    
?>