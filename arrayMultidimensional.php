<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //Array multidimensional é um array que contem um ou mais arrays;
        $arrayMulti = [];

        //Atribuindo um novo array dentro de outro array;
        $arrayMulti['nome'] = array(
            1 => 'Sid',
            2 => 'Ju',
            3 => 'Alan'
        );

        //Atribuindo um novo array dentro de outro array;
        $arrayMulti['sobrenome'] = [
            1 => 'Nascimento',
            2 => 'Lubambo',
            3 => 'Vasconcelos'
        ];

        echo '<pre>';
            print_r($arrayMulti);
        echo '</pre>';
        echo '<hr />';

        //Coordenadas
        echo $arrayMulti['nome'][2];

    ?>

</body>

</html>