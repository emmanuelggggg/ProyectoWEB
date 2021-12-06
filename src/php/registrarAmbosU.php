<?php

    $nombre = $_REQUEST['nombre'];
    $correo = $_REQUEST['correo'];
    $passworrd = $_REQUEST['password'];
    $roll = $_REQUEST['roll'];

    if($roll == 2){
        header("location:/components/admins.php");
    }else{
        header("location:/components/admins.php");
    }
?>