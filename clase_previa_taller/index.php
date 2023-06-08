<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mostrar.php" method="get">
        <label for="">Digite su edad</label>
        <input type="number" name="edad">
        <input type="submit" value="enviar" name="mostrar">
    </form>

    <?php 
    include 'db/db.php';

    $data  = mysqli_query($conexion,"SELECT * FROM usuarios where id >= '1'");
echo'
    <table>
    <tr>
        <td>ID</td>
        <td>Cédula</td>
        <td>Nombre</td>
    </tr>    
';

    while ($data2 = mysqli_fetch_array($data)){
        $id = $data2['id'];
        $cedula = $data2['cedula'];
        $nombre = $data2['nombre'];
        
        echo '

            <tr>
                <td>'.$id.'</td>
                <td>'.$cedula.'</td>
                <td>'.$nombre.'</td>
            </tr>';     
    }

    echo '</table>';  
    ?>
</body>
</html>