<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        
        $x = 1;

        do {
            echo "X = $x <br />";

            $x++; //Critério de parada

        } while($x < 9); //Condição no final;

        while ($x < 9) {
            echo 'Entrou no While';
        }
    ?>

</body>

</html>