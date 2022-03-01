<?php
    include('con_db.php');
    $concurso=$_POST['concurso'];
    $material=$_POST['material'];

    if($concurso){
        echo('location:index.html');
    };

    mysqli_free_result($resultado);
    mysqli_close($conex);


?>