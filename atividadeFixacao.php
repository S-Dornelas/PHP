<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. 
        //Utilize as variáveis $idade e $pes no processo. Neste primiro momento faça a atribuição de valores as variáveis de forma estática, ou seja, no processo de atribuição.

        $idade = 37;
        $peso = 88;

        if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
            echo 'Atende os requisitos';
        } else {
            echo 'Não atende os requisitos';
        }
    ?>
</body>

</html>