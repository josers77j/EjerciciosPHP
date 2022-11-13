<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jocote corona</title>
</head>

<body>

    <body>
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
        <form action="ejemplo5.php" method="post">
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

            // verificar el tipo
            if ($tipo == "A") {
                # verificar el tamaño
                if ($tamano == 1) {
                    # agregar 0.20 al precio
                    $precio = $precio + 0.20;
                } else {
                    # agregar 0.30 al precio
                    $precio = $precio + 0.30;
                }
            } else {
                # verificar el tamaño
                if ($tamano == 1) {
                    # descontar 0.30 al precio
                    $precio = $precio - 0.30;
                } else {
                    # descontar 0.50 al precio
                    $precio = $precio - 0.50;
                }
            }

            // calcular total
            $total = $kilos * $precio;
            echo "<h1>El total de su pedido será: $ $total</h1>";
        }
        ?>
    </body>
</body>

</html>