<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form class="row g-3 mt-5" method="post" action="ejercicio6.php">
            <div class="col-12">
                <h5>Formulario para beca</h5>
                <h6>introduzca la edad y promedio para conocer a que beca puede usted aplicar</h6>
            </div>
            <div class="col-6">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" placeholder="Escribe tu edad" name="edad">
            </div>
            <div class="col-6">
                <label for="promedio" class="form-label">Promedio</label>
                <input type="text" class="form-control" placeholder="escribe tu promedio" name="prom">
            </div>
            <div class="col-12 g-3">
                <button type="submit" class="btn btn-primary" name="result">Procesar</button>
            </div>
        </form>
    </div>

    <div class="container">
        <?php
        if (isset($_POST["result"])) {
            $edad = $_POST["edad"];
            $prom = $_POST["prom"];

            if ($edad > 18) {
                if ($prom >= 9) {
                    echo "Beneficio de beca tipo A por el monto de $2000.00";
                } elseif ($prom >= 7.5) {
                    echo "Beneficio de beca tipo B por el monto de $1000.00";
                } elseif ($prom >= 6 && $prom <= 7.5) {
                    echo "Beneficio de beca tipo C por el monto de $500.00";
                } else {
                    echo "animos para el proximo año";
                }
            } elseif ($edad <= 18) {
                if ($prom >= 9) {
                    echo "Beneficio de beca tipo A por el monto de $3000.00";
                } elseif ($prom >= 8 && $prom < 9) {
                    echo "Beneficio de beca tipo B por el monto de $2000.00";
                } elseif ($prom >= 6 && $prom < 8) {
                    echo "Beneficio de beca tipo C por el monto de $100.00";
                } else {
                    echo "animos para el proximo año";
                }
            }
        }
        ?>


    </div>


</body>

</html>