<?php

    $server = "localhost";
    $usuario = "root";
    $contra = "";
    $db = "niibiri";

    $conexion = new mysqli($server, $usuario, $contra, $db);
    
    if($conexion->connect_error){
        die("Conexion Fallida: ".$conexion->connect_error);
    }
?>