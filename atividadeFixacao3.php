<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos numéricos aleatórios entre 1 e 60;
        //Simulando o funcionamento do sorteio da Mega Sena;
        //Atente-se ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos;

        $numerosSorteados = array();

        while (count($numerosSorteados) <=5 ) {

            $num = rand(1, 60);

            if(!in_array($num, $numerosSorteados)) {
                $numerosSorteados[] = $num;
            };
        };

        print_r($numerosSorteados);
    ?>

</body>

</html>