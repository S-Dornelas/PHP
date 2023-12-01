<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //strttolower($text) - Transforma todos os caracteres da string em minúsculos;
        //strtoupper($text) - Transforma todos os caracteres da string em maiúsculos;
        //ucfirst($text) - Transforma o primeiro caracter da string em maiúsculo;
        //strlen($text) - Conta a quantidade de caracterres de uma string;
        //str_replace(<procura por>, <substitui por>, $text) - Substitiu uma cadeia de caracteres por outra dentro de uma string; 
        //substr($text, <posição inicial>, <qnt de caracteres>) - Retornar parte de uma string;

        $text = 'Programando em PHP <br />';

        echo $text;
        echo strtolower($text); //String to Lower;
        echo strtoupper($text); //String to Upper;

        $text2 = 'desenvolvedor web <br />';

        echo $text2;
        echo ucfirst($text2); //Uppercase First;
        echo strlen($text2); //String Lenght;
        echo '<br />';
        echo str_replace('desenvolvedor', 'Dev', $text2); //String Replace;
        echo substr($text2, 0, 3); //Sub String;

    ?>

</body>

</html>