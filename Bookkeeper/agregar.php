<?php 

try{
$conn = new PDO('mysql:host=localhost;dbname=money','root','');
}catch(PDOException $e){
        echo "error de conexión:".$e->getMessage();

}

if(isset($_POST['agregar_tarea'])){

    $tarea=($_POST['pendiente1']);
    $tarea2=($_POST['pendiente2']);

    $sql='INSERT INTO name (pendiente, valor) VALUE (?,?)';
    $sentencia = $conn->prepare($sql);
    $sentencia->execute([$tarea,$tarea2]);

}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM name WHERE id=?";
    $sentencia=$conn->prepare($sql);
    $sentencia->execute([$id]);
}

$sql="SELECT * FROM name";
$resultados=$conn->query($sql);



?>