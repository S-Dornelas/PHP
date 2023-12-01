<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //is_array(array) - Verifica se o parâmetro é um array;
        //array_keys(array) - Retorna todas as chaves de um array;
        //sort(array) - Ordena um array e reajusta seus índices;
        //asort(array) - Ordena um array preservando os índices;
        //count(array) - Conta a quantidade de elementos de um array;
        //array_merge(array) - Funde um ou mais arrays;
        //explode(array) - Divide uma string baseada em um delimitador;
        //implode(array) - Junta elementos de um array em uma string;

        $array = 'String';
        $retorno = is_array($array);

        if ($retorno) {
            echo 'É um array.<hr />';
        } else {
            echo 'Não é um array.<hr />';
        };

        $array2 = [
            1 => 'a',
            7 => 'b',
            19 => 'c'
        ];

        echo '<pre>';
            print_r($array2);
        echo '</pre>';
        echo '<hr />';

        $chavesArray = array_keys($array2);

        echo '<pre>';
            print_r($chavesArray);
        echo '</pre>';
        echo '<hr />';

        $array3 = ['Monitor', 'Placa Mãe', 'Processador', 'Memória RAM'];
        echo '<pre>';
            print_r($array3);
        echo '</pre>';
        echo '<hr />';

        sort($array3); //True or False;

        echo '<pre>';
            print_r($array3);
        echo '</pre>';
        echo '<hr />';

        $array4 = ['Notebook', 'Teclado', 'Mouse', 'Gabinete'];

        echo '<pre>';
            print_r($array4);
        echo '</pre>';
        echo '<hr />';

        asort($array4); //True or False;

        echo '<pre>';
            print_r($array4);
        echo '</pre>';
        echo '<hr />';

        echo count($array4);
        echo '<hr />';

        $arrayMerge = array_merge($array3, $array4);
        echo '<pre>';
            print_r($arrayMerge);
        echo '</pre>';
        echo '<hr />';

        $dataString = '17/07/1986';
        $divideString = explode('/', $dataString);
        echo '<pre>';
            print_r($divideString);
            echo $divideString[2].'-'.$divideString[1].'-'.$divideString[0];
        echo '</pre>';
        echo '<hr />';

        $array5 = ['Sid', 'Nascimento', 'DevWeb'];
        echo '<pre>';
            print_r($array5);
        echo '</pre>';
        echo '<hr />';

        $arrayParaString = implode('_', $array5);
        echo $arrayParaString;
    ?>

</body>

</html>