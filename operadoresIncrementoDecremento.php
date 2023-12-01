<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Pós-Incremento:</h3>
    <?php
        //Pré-incremento (++$x) - Adiciona uma unidade antes de retornar $x;
        //Pós-incremento ($x++) - Retornar $x e depois adiciona uma unidade;
        ////Pré-incremento (--$y) - Diminui uma unidade antes de retornar $y;
        //Pós-incremento ($y--) - Retornar $y e depois diminui uma unidade;

        $x = 7;
        echo "O valor contido em x é $x <br />";
        echo 'O valor sendo atribuido o Pós-Incremento em ' . $x++ . '<br />';
        echo "O valor atualizado em x agora é $x <br />";
    ?>

    <h3>Pré-Incremento:</h3>
    <?php
        $y = 10;
        echo "O valor contido em y é $y <br />";
        echo 'O valor sendo atribuido o Pré-Incremento em ' . ++$y . '<br />';
        echo "O valor atualizado em x agora é $y <br />";
    ?>

<h3>Pós-Decremento:</h3>
    <?php
        $x = 7;
        echo "O valor contido em x é $x <br />";
        echo 'O valor sendo atribuido o Pós-Decremento em ' . $x-- . '<br />';
        echo "O valor atualizado em x agora é $x <br />";
    ?>

    <h3>Pré-Decremento:</h3>
    <?php
        $y = 10;
        echo "O valor contido em y é $y <br />";
        echo 'O valor sendo atribuido o Pré-Decremento em ' . --$y . '<br />';
        echo "O valor atualizado em x agora é $y <br />";
    ?>
</body>

</html>