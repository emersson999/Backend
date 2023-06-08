<?php 

include '../db/conexion.php';

if(isset($_POST['registro'])) {
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $en = $_POST['password'];

    $passwordencryp = base64_encode($en);

    $sql = mysqli_query($conexion,"INSERT INTO usuarios (nombre, correo, clave) VALUES ('$nombre', '$correo', '$passwordencryp')");

    header ('location:../index.html');
  
}
?>
