<?php
$nombre = $_POST["nombre"];
$n1 = $_POST["nota1"];
$n2 = $_POST["nota2"];
$n3 = $_POST["nota3"];
$memo = '';
$promedio = (($n1 * .3) + ($n2 * .3) + ($n3 * .4));
if ($promedio >= 1 && $promedio <=3) {
    $memo = ' necesita mejorar ';
}elseif ($promedio >= 4 && $promedio <=5.9) {
    $memo = ' mal resultado ';
}elseif ($promedio >= 6 && $promedio <=7.9) {
    $memo = ' bueno, peor es nada ';
}elseif ($promedio >= 8 && $promedio <=9.9) {
    $memo = ' muy bien ';
}elseif ($promedio == 10) {
    $memo = ' excelente ';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h1 class="text-center"> El promedio para el estudiante, <?= $nombre; ?> es: </h1>
            </div>
            <div class="col-12 mt-3">
                <h2 class="text-center"> nota promedio : "<?=$promedio;?>" <?=$memo;?></h2>

                <p> nota del computo 1 : "<?= $n1; ?>"</p>
                <p> nota del computo 2 : "<?= $n2; ?>"</p>
                <p> nota del computo 3 : "<?= $n3; ?>"</p>
            </div>
        </div>
    </div>
</body>

</html>