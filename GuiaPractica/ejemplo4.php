 <?php

    echo "<h2>Reultados con IF</h2><hr>";
    //selectivas multiples IF - IFELSE
    $i = 2;
    if ($i == 0) {
        echo "i es igual a 0";
    } elseif ($i == 1) {
        echo "i es igual a 1";
    } elseif ($i == 2) {
        echo "i es igual a 2";
    } else {
        echo "i tiene un valor diferente de 0, 1 o 2";
    }

    echo "<h2>Reultados con SWITCH</h2><hr>";
    //selectivas multiples SWITCH
    switch ($i) {
        case 0:
            echo "i es igual a 0";
            break;
        case 1:
            echo "i es igual a 1";
            break;
        case 2:
            echo "i es igual a 2";
            break;
        default:
            echo "i tiene un valor diferente de 0, 1 o 2";
    }
    ?>