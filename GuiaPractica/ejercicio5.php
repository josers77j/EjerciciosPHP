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
        <form class="row g-3 mt-5" method="post" action="ejercicio5.php">
            <div class="col-12">
                <h6>Sub total de los productos</h6>
            </div>
            <div class="col-6">
                <label for="subtotal" class="form-label">Subtotal de los articulos</label>
                <input type="number" class="form-control" placeholder="escribe el subtotal" name="SubT">
            </div>
            <div class="col-12 g-3">
                <button type="submit" class="btn btn-primary" name="result">Procesar</button>
            </div>
        </form>
    </div>

    <div class="container">
        <?php
        echo 'El total aplicando el descuento es : ';

        if (isset($_POST["result"])) {
            $SubT = $_POST["SubT"];
            
            if ($SubT >= 200) {
                $SubT = $SubT-($SubT*.15);
                echo 'el total a pagar con el descuento es : $' . $SubT;
            } elseif ($SubT>=100 && $SubT < 200) {
                $SubT = $SubT-($SubT*.12);
                echo 'el total a pagar con el descuento es : $' . $SubT;
            }elseif ($SubT < 100) {
                $SubT = $SubT-($SubT*.10);
                echo 'el total a pagar con el descuento es : $' . $SubT;
            }            
        }
        ?>


    </div>


</body>

</html>