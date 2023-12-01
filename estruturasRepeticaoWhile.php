<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        
        $num = 1;

        echo '--- Início do Loop ---<br />';

        while($num < 50) {
            echo "$num <br />";

            $num += 4; //Critério de parada;
        };

        echo '--- Fim do Loop ---<hr />';

        $num2 = 0;

        echo '--- Início do Loop ---<br />';

        while($num2 < 10) {

            $num2 += 1;

            if ($num2 == 2 || $num2 == 7) {
                continue;
            }

            echo "$num2 <br />";
        };

        echo '--- Fim do Loop ---<br />';
    ?>

</body>

</html>