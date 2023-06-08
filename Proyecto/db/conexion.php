<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "usuarios";

$conexion = new mysqli($server, $username, $password,$database);

if($conexion ->connect_errno){
    echo "Fallos en conexión";
    exit();
}

?>