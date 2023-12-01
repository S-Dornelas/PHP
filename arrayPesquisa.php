<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        $listaNomes = [
            'Sid',
            'Ju',
            'José',
            'Maria'
        ];

        echo '<pre>';
            print_r($listaNomes);
        echo '</pre>';
        echo '<hr />';

        //in_array() - Função procura um valor específico em um array;
        //Retornar true (1) ou false (vazio) para o que está sendo procurado;
        $nomeExistente = in_array('Sid', $listaNomes);

        if ($nomeExistente) {
            echo 'Nome encontrado no array.<hr />';
        } else {
            echo 'Nome não encontrado no array.<hr />';
        };

        //array_search() - Retornar o índice do valor pesquisado, caso ele exista;
        //Caso o valor não exista, o seu retorno não é false, é 'null';
         echo array_search('Maria', $listaNomes);
    ?>

</body>

</html>