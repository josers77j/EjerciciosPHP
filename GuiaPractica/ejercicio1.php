<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jocote corona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>


    <div class="container mt-3">
        <h2>Una asociación de productores de jocote corona tiene como
            política fijar un precio inicial al kilo de su producto, el cual s
            e clasifica en tipos A y B, y además en tamaños 1 y 2. Cuando se r
            ealiza la venta del producto, ésta es de un solo tipo y tamaño, se
            requiere determinar cuánto recibirá un productor por los jocotes
            SELECTIVAS Y BUCLES EN PHP
            ING. CARLOS ISAIAS RIOS LUNA 7
            que entrega en un pedido, considerando lo siguiente: si es de tipo
            A, se le cargan $ 0.20 al precio inicial cuando es de tamaño 1; y
            $ 0.30 si es de tamaño 2. Si es de tipo B, se rebajan $ 0.30 cuan
            do es de tamaño 1, y $ 0.50 cuando es de tamaño 2.</h2>
        <hr>
        <h3>Ingrese los datos del pedido de jocotes corona</h3>
        <form action="ejercicio1.php" method="post">
            <label for="tipo">Tipo: </label>
            <select name="tipo" id="tipo">
                <option value="A" selected>A</option>
                <option value="B">B</option>
            </select>
            <hr>
            <label for="tamano">Tamaño: </label>
            <select name="tamano" id="tamano">
                <option value="1" selected>1</option>
                <option value="2">2</option>
            </select>
            <hr>
            <label for="precio">Precio: </label>
            <input type="text" name="precio" id="precio">
            <hr>
            <label for="kilos">Kilos: </label>
            <input type="text" name="kilos" id="kilos">
            <hr>
            <input type="submit" value="Calcular">
        </form>

        <?php
        //si $_POST["tipo"] tiene valor se enviaron los datos
        if (isset($_POST["tipo"])) {
            # tomar los datos enviados
            $tipo = $_POST["tipo"];
            $tamano = $_POST["tamano"];
            $precio = $_POST["precio"];
            $kilos = $_POST["kilos"];

            switch ($tipo) {
                case 'A':
                    switch ($tamano) {
                        case 1:
                            $precio = $precio + 0.20;
                            break;
                        case 2:
                            $precio = $precio + 0.30;
                            break;

                        default:
                            echo "selecciona un tamaño";
                            break;
                    }
                    break;

                case 'B':
                    switch ($tamano) {
                        case 1:
                            $precio = $precio - 0.30;
                            break;
                        case 2:
                            $precio = $precio - 0.50;
                            break;

                        default:
                            echo "selecciona un tamaño";
                            break;
                    }
                    break;




                default:
                    echo "debes seleccionar un tipo";
                    break;
            }


            // calcular total
            $total = $kilos * $precio;
            echo "<h1>El total de su pedido será: $ $total</h1>";
        }
        ?>
    </div>


</body>

</html>