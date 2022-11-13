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
        <form class="row g-3 mt-5" method="post" action="ejercicio2.php">


            <div class="col-4">
                <label for="edad" class="form-label">Conoce si eres apto para votar en las proximas elecciones</label>
                <input type="text" class="form-control" placeholder="Introduce tu edad" name="edad">
            </div>
            <div class="col-12 g-3">
                <button type="submit" class="btn btn-primary">Verificar</button>
            </div>
        </form>
    </div>

    <div class="container">
        <?php
        $mensaje = 'Segun el texto inferior';
        echo $mensaje;
         
          if (isset($_POST["edad"])) {
            $mensaje = '';
            $edad = $_POST["edad"];
            if ($edad >= 18) {
                
                $mensaje = "eres apto para votar";
            }else {
                $mensaje = "no eres apto para votar";
            }
            echo '<div class="alert alert-secondary" role="alert g-3">' . $mensaje . '</div>';
            
            
          }

        ?>
        

    </div>


</body>

</html>