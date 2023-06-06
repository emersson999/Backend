<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "prueba_atenea";

$conexion = new mysqli($host,$user,$password,$db);
if ($conexion -> connect_error){
    echo "Se experimentan fallos de conexión";
    exit();
}


?>