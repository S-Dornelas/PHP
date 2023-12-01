<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        $itens = [
            'Sofá',
            'Mesa',
            'Cadeira',
            'Fogão',
            'Geladeira'
        ];

        echo '<pre>';
            print_r($itens);
        echo '</pre>';

        foreach ($itens as $item) {
            echo $item;

            if ($item == 'Cadeira') {
                echo ' (*Compre quatro cadeiras e ganhe 20% de desconto na compra de uma mesa.)';
            };

            echo '<br />';
        }

    ?>

</body>

</html>