<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>


    <?php
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];

    $operador = $_POST['operacion'];

    if ($operador == "Suma") {
        $suma = $num1 + $num2;
        echo "El resultado de la Suma es: = " . $suma;
    } elseif ($operador == "Resta") {
        $resta = $num1 - $num2;
        echo "El resultado de la Resta es: = " . $resta;
    } elseif ($operador == "Multiplicacion") {
        $multiplicacion = $num1 * $num2;
        echo "El resultado de la Multiplicacion es: = " . $multiplicacion;
    } elseif ($operador == "Division") {
        if ($num2 == 0) {
            echo 'error';
        }else {
            $division = $num1/$num2;
            echo "El resultado de la Division es: = " . $division;    
        }
    } elseif ($operador == "Potencia") {
        $potencia = pow($num1,$num2);
        echo "El resultado de la potencia de " . $num1 ."<sup>".$num2. "</sup>"  . "  es: = " . $potencia;    
       
    }
    ?>
    <br>
    <a href="ifTarea2.html">Regresar</a>


</body>

</html>