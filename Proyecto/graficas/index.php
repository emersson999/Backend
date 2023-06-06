<?php 

include '../db/conexion.php';

session_start();
if (isset($_SESSION['usuario'])) {
    echo '';
}else{
    header("location: ../index.html");
}

$query_cars = mysqli_query($conexion, "SELECT * FROM carros");
$query_cars2 = mysqli_query($conexion, "SELECT * FROM carros");


//Lógica para gráfica

$cant = 0;
while ($consult_graf = mysqli_fetch_array($query_cars2)){
    $array_marca[$cant] = $consult_graf['marca']; 
    $array_venta[$cant] = $consult_graf['venta']; 

    $cant++;
}


    $total_ventas = array_sum($array_venta);
    $datosx = json_encode($array_marca);
    $datosy = json_encode($array_venta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/df0f283818.js" crossorigin="anonymous"></script>
    <script src='https://cdn.plot.ly/plotly-2.20.0.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js'></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.1.1/model-viewer.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section id="content-main">
         <div class="menu-main">
            <img src="img/pngegg.png" alt="">
          <nav>
             <ul>
                <li>
                    <a href=""><i class="fa-solid fa-car"></i></a>
                </li>
                <?php
                 if ($_SESSION['rol'] == 1) {?>

                <li>
                    <a href=""><i class="fa-solid fa-cloud-sun"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-wallet"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-comments"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-gift"></i></a>
                </li>
                <?php
                } else{}?>
            </ul>
            <div class="icon-android">
             <a href="../back/close.php">     <i class="fa-brands fa-android"></i></a>
            </div>
         </nav>
       </div> 

       <div class="shop_cars">
           <h2>C. shop</h2>

           <div class="element_ind">
                <img class="ratate_car" src="img/car1.png" alt="car1">
                <span>Veyron</span>
           </div>
           <div class="element_ind">
              <img src="img/car2.png" alt="car2">
              <span>G. sport</span>
           </div>
           <div class="element_ind">
              <img src="img/car3.png" alt="car3">
              <span>Centodieci</span>
           </div>
        </div>
       
        <div class="graphic-main">
            <div class="content-card-one">
                <div class="indiv">
                    <div class="icon-ind left">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    
                    <div class="cont-info">
                     <h3><?php echo $total_ventas ?><span>Total ventas</span></h3>
                    </div>
                    <h4>R.<span>9.5</span></h4>
                </div>
                <div class="indiv right">
                    <div class="icon-ind green">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <div class="cont-info">
                    <h3>
                    <?php 
                    rsort($array_venta);
                    echo $array_venta[0];
                    ?> <span>% de venta más alto</span></h3>
                    </div>
                    <h4>R.<span>9.9</span></h4>
                </div>
            </div>  
            <div class="graphic">
                <div id="myDiv"></div>
            </div>
            <div class="graphic">
                <div id="myDiv2"></div>
            </div>
        </div>

        <div class="tridimensional">
            <h3>Insert Data</h3>
           <form action="../back/insert_cars.php" method="post">
                <input type="text" name="name_car" placeholder="Nombre de carro" required>
                <input type="number" name="sold_car" placeholder="This is cold of car" required>
                <input type="submit" name="insert_car" value="Enviar"> 
            </form> 
            <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2" >TABLA DE VENTA DE AUTOS</th>
                        </tr>
                    </thead>
                    <tr>
                        <th>Marca</th>
                        <th>Ventas</th>
                        <th>% de ventas</th>
                        <th>Total</th>
                        </tr>
                        <?php
                            while ($row = mysqli_fetch_array($query_cars)) {
                               $marca = $row['marca'];
                               $venta = $row['venta'];
                               $por_ventas = ($venta*100)/$total_ventas;
                               $por_ventas = round($por_ventas, 2);
                               echo '
                               <tr>
                                    <td>'.$marca.'</td>
                                    <td>'.$venta.'</td>
                                    <td>'.$por_ventas.'</td>
                               </tr>
                               ';
                            }
                            echo '<tr>
                                        <th>Total = </th>
                                        <th>'.$total_ventas.'</th>
                                        <th>100%</th>
                                  </tr>'
                        ?>
                </table>
    </div>
               
           


    </section>
    
    <script src="js/map1.js"></script>
<script>
function crearCadenaLineal(json) {
    var parsed = JSON.parse(json);
    var arr = [];
    for (var x in parsed) {
        arr.push(parsed[x]);
    }
    return arr;
}
</script>
    <script>
$datosx = crearCadenaLineal('<?php echo $datosx ?>');
$datosy = crearCadenaLineal('<?php echo $datosy ?>');


var trace1 = {
  x: $datosx,
  y: $datosy,
  line: {
    color: 'rgb(77, 209, 205)',  
    shape: 'spline',
    dash: 'dashdot',  
    width: 1
  },
  type: 'scatter'
};



var data = [trace1];

Plotly.newPlot('myDiv', data);
    </script>


        <script>

var data2 = [{
  values:  $datosy,
  labels:  $datosx,
  type: 'pie'
}];

var layout = {
  height: 400,
  width: 500
};

Plotly.newPlot('myDiv2', data2, layout);



    </script>
</body>
</html>