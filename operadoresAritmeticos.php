<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //Adição (+) - Soma valores;
        //Subtração (-) - Diferença entre valores;
        //Multiplicação (*) - Produto de valores;
        //Divisão (/) - Quociente dos valores;
        //Módulo (%) - Resto existente em uma operação de divisão;

        $num1 = 13;
        $num2 = 4;

        echo "A soma entre $num1 e $num2 é " . ($num1+$num2) . '<br />';
        echo "A subtração entre $num1 e $num2 é " . ($num1-$num2)  . '<br />';
        echo "A multiplicação entre $num1 e $num2 é " . ($num1*$num2)  . '<br />';
        echo "A divisão entre $num1 e $num2 é " . ($num1/$num2)  . '<br />';
        echo "O módulo entre $num1 e $num2 é " . ($num1%$num2)  . '<br />';
    ?>
</body>

</html>