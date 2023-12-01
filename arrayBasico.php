<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //Arrays com os índices sequenciais (númericos);
        //Array se inicia com o índice [0];
        //$listaFrutas = array('Banana', 'Maça', 'Morango', 'Uva');
        $listaFrutas = ['Banana', 'Maça', 'Morango', 'Uva'];

        //Inclusão dde um novo índice no array já criado;
        //Dinamicamento o PHP gera um novo valor/índice;
        $listaFrutas[] = 'Abacaxi';

        //Debug - var_dumo() e print_r()
        //Pre formatação de testo - <pre></pre>
        echo '<pre>';
            var_dump($listaFrutas);
        echo '</pre>';
        echo '<hr />';
        
        echo '<pre>';
            print_r($listaFrutas);
        echo '</pre>';
        echo '<hr />';

        //Imprimindo um único índice com sua 'coordenada';
        echo $listaFrutas[2];
        echo '<hr />';

        //Arrays associativos os índices não são sequenciais, as posições são definidas de forma explicita;
        //Usa o operador '=>' para associação;
        $listaLinguagemProgramacao = [
            'a' => 'PHP',
            'b' => 'JavaScrip',
            'x' => 'Python',
            '5' =>'Java'
        ];

        echo '<pre>';
            print_r($listaLinguagemProgramacao);
        echo '</pre>';
        echo '<hr />';

        echo $listaLinguagemProgramacao['x'];
    ?>

</body>

</html>