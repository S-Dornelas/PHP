<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //ceil($number) - Arredonda o valor para cima;
        //floor($number) - Arredonda o valor para baixo;
        //round($number) - Arredonda o valor com base nas casas decimais;
        //rand() - Gera um inteiro aleatório;
        //sqrt($number) - Retorna a raiz quadrada;

        $number = 17.76;

        echo ceil($number);
        echo '<br />';
        echo floor($number);
        echo '<br />';
        echo round($number);
        echo '<br />';
        echo rand(0, 100);
        echo '<br />';
        echo sqrt(rand(0, 10));
    ?>

</body>

</html>