<?php


    $servidor="localhost";
    $usuario="admntrar_nutrn1";
    $clave="nu7r13NAG";
    $baseDeDatos="admntrar_nutrn1";

    $conex = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$conex){
        echo"Error en la conexion con el servidor";
    }

    
?>