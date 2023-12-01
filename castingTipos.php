<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //gettype () => Retorna o tipo da variável;
        $valor = 10;
        echo gettype($valor);
        echo '<br />';

        //Casting de int para float;
        $valor2 = (float) $valor;
        echo gettype($valor2);

        //integer -> float, string;
        //float -> integer, string;
        //string -> integer, float, boolean;
        //boolean -> integer, string;
    ?>
</body>

</html>