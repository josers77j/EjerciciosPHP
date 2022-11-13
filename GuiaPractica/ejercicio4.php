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
        <form class="row g-3 mt-5" method="post" action="ejercicio4.php">
            <div class="col-12">
                <h6>Escribe el nombre y edad de 3 personas ^^</h6>
            </div>
            <div class="col-6">
                <label for="edad" class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Escribe un nombre" name="n1">
            </div>
            <div class="col-6">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" placeholder="escribe una edad" name="e1">
            </div>
            <div class="col-6">
                <label for="edad" class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Escribe un nombre" name="n2">
            </div>
            <div class="col-6">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" placeholder="escribe una edad" name="e2">
            </div>
            <div class="col-6">
                <label for="edad" class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Escribe un nombre" name="n3">
            </div>
            <div class="col-6">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" placeholder="escribe una edad" name="e3">
            </div>

            <div class="col-12 g-3">
                <button type="submit" class="btn btn-primary" name="result">Procesar</button>
            </div>
        </form>
    </div>

    <div class="container">
        <?php
        echo 'El menor de los 3 es : ';

        if (isset($_POST["result"])) {
            $age1 = $_POST["e1"];
            $age2 = $_POST["e2"];
            $age3 = $_POST["e3"];
            $name1 = $_POST["n1"];
            $name2 = $_POST["n2"];
            $name3 = $_POST["n3"];
            
            if ($age1 < $age2 && $age1 < $age3) {

                echo $name1 . ' con ' . $age1 . ' años';
                
            } elseif ($age2 < $age3) {
                echo $name2 . ' con ' . $age2 . ' años';           
            }else {
                echo $name3 . ' con ' . $age3 . ' años';            
            }
            
        }

        ?>


    </div>


</body>

</html>