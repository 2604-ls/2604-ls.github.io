<?php

    $server = "localhost";
    $usuario = "root";
    $contra = "";
    $db = "niibiri";

    $conex = new mysqli($server, $usuario, $contra, $db);
    
    if($conex->connect_error){
        die("Conexion Fallida: ".$conex->connect_error);
    }
?>