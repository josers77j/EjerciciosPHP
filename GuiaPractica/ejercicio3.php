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
        <form class="row g-3 mt-5" method="post" action="ejercicio3.php">
            <div class="col-4">
                <label for="horas" class="form-label">Seleccione la cantidad de horas de parqueo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="myradio" value="2" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        dos horas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="myradio" value="3" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        tres horas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="myradio" value="5" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        cinco horas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="myradio" value="10" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        diez horas o mas
                    </label>
                </div>
            </div>
            <div class="col-12 g-3">
                <button type="submit" class="btn btn-primary" name="result">Verificar</button>
            </div>
        </form>
    </div>

    <div class="container">
        <?php

        if (isset($_POST["result"])) {
            $radio = $_POST["myradio"];
            switch ($radio) {
                case 2:
                    echo "debe pagar $5 varos";
                    break;
                case 3:
                    echo "debe pagar $4 varos";
                    break;
                case 5:
                    echo "debe pagar $3 varos";
                    break;
                case 10:
                    echo "debe pagar $2 varos";
                    break;

                default:
                    echo "olvidaste seleccionar las horas de parqueo";
                    break;
            }
        }
        ?>
    </div>
</body>

</html>