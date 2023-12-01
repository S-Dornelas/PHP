<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Operador E (AND ou &&) - Verdadeiro se todos as expressões forem verdadeiras;
    //Operador OU (OR ou ||) - Verdadeiro se pelo menos uma das expressões for verdadeira;
    //Operador Xor (XOR) - Verdadeiro apenas se uma das expressãoes for verdadeira, mas não ambas;
    //Operador Negação (!) - Inverte o resultado da expressão;

     if (17 >= 10 XOR 22 === '22') {
        echo 'Verdadeiro';
     } else {
        echo 'Falso';
     }
?>
</body>
</html>