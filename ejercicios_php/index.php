<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo!</h1>

    <form action="" method="post">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="operar" id="">
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="4">Multiplicación</option>
            <option value="5">División</option>
        </select>
        <input type="submit" value="enviar" name="proceso">
</form>


    <?php


// const HOLA = 'HOLA MUNDO';
// function funsion(){
//     return 67;
// return HOLA;
// }

// echo funsion();
    // const CONSTANTE = 5;
    // $CONSTANTE =#;


    // $a = 0;
    // const PI = 3.14159265358979322384;

    // while ($a <= 10) {
    //     echo $a. '</br>';
    //     $a++;
    // }

    // $a = 10;
    // while ($a >= 0) {
    //     echo $a. '</br>';
    //     $a--;
    // }

    // $a = 0;
    // while ($a <= 10) {
    //     echo $a. '</br>';
    //     $a +=2;
    // }

    // $a =5;
    // $b = 3;

    // $suma = $a +$b;
    // $resta = $a -$b;
    // $multiplicacion = $a *$b;
    // $div = $a / $b;
    // $modulo = $a % $b;
    // $exponen = $a ** $b;

    // echo $suma.'<br>';
    // echo $resta.'<br>';
    // echo $multiplicacion.'<br>';
    // echo $div.'<br>';
    // echo $modulo.'<br>';
    // echo $exponen.'<br>';


    //Operadores logicos

    // $a = 5;
    // $b = 4;
    // $c = 7;    

    // if (($a != $b || ($a != $c && ($a == $b || $a == $c))) && ($a > $b)){
    //     echo 'eso es a '.$a.'la letra b es igual a '.$b;
    // }else{
    //     echo 'no ingreso';
    // }
    //

    // $num1 = 0;
    // if (isset($_POST['proceso'])){
    //     $num1 = $_POST['num1'];
    //     if ($num1 == 1) {
    //         echo 'Ingreso';
    //     }else{
    //         echo 'la cagaste';
    //     }
     
    // }

    // if ($a > $b) {
    //     echo "a es mayor que b";
    // } elseif ($a == $b) {
    //     echo "a es igual que b";
    // } else {
    //     echo "a es menor que b";
    // }

    // $a=10;
    // do {
    //     echo $a;
    //     $a--;
        
    // }while ($a >= 0)
   
    // for  ($a=10; $a > 0; $a--){
    //     echo $a.'<br>';
    // }


    // $a = 0;
    // while ($a <=10) {
    //     if ($a < 5){

    //         $a += 2;
    //     }
    //     if($a >= 5){
    //         $a++;

    //     }
    //     echo $a.'<br>';
    // }
if(isset($_POST['proceso'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['operar'];

    switch ($oper) {
        case '1':
            $resultado = $num1+$num2;
            $name = 'suma';
            break;
        case '2':
            $resultado = $num1-$num2;
            $name = 'resta';
            break;
        case '3':
            $resultado = $num1*$num2;
            $name = 'multiplicación';
            break;
        case '4':
            $resultado = $num1/$num2;
            $name = 'división';
            break;
            
    }
    echo 'El resultado de '.$name.'es '.$resultado;
}


?>
   



</body>
</html>

