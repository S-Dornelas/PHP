<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        /* $registros = array(
            'Título Notícias 1',
            'Título Notícias 2',
            'Título Notícias 3'
        );

        $idx = 0;

        while($idx < 3) {
            
            echo $registros[$idx];
            echo '<hr />';
            $idx++;
        }; */

        $registros = array(
            array(
                'titulo' => 'Título notícia 1',
                'conteudo' => 'Conteúdo notícia 1'
            ),
            array(
                'titulo' => 'Título notícia 2',
                'conteudo' => 'Conteúdo notícia 2'
            ),
            array(
                'titulo' => 'Título notícia 3',
                'conteudo' => 'Conteúdo notícia 3'
            ),
            array(
                'titulo' => 'Título notícia 4',
                'conteudo' => 'Conteúdo notícia 4'
            ),
            array(
                'titulo' => 'Título notícia 5',
                'conteudo' => 'Conteúdo notícia 5'
            )
        );

        echo '<pre>';
            print_r($registros);
        echo '</pre>';
        echo'<br /><br /><br />';

        $idx = 0;

        //count - Conta a quantidade de elementos de array;
        echo 'Array possui: ' . count($registros) . ' registros';
        echo'<br /><br /><br />';

        /* 
        while($idx < count($registros)) {

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr />';

            $idx++;
        };
        */

        /* 
        do {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr />';

            $idx++;
        } while ($idx < count($registros));
        */


        for($i = 0; $i < count($registros); $i++) {
            echo '<h3>' . $registros[$i]['titulo'] . '</h3>';
            echo '<p>' . $registros[$i]['conteudo'] . '</p>';

            echo '<hr />';
   
        }

    ?>

</body>

</html>