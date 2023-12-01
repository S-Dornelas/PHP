<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        $funcionarios = array(
            array('nome' => 'Sid', 'salario' => 1000, 'dataNas' => '17/07/1986'),
            array('nome' => 'Ju', 'salario' => 5000),
            array('nome' => 'Lucas', 'salario' => 10000)
        );

        echo '<pre>';
            print_r($funcionarios);
        echo '</pre>';

        //Token '=>';
        //Arrays não são suportados na funcionalidade 'echo';
        //Usar print_r(), var_dump() ou var_export();

        foreach($funcionarios as $idx => $funcionario) {
            
            foreach($funcionario as $idx2 => $valor) {

                echo "$idx2 - $valor <br />";
            };

            echo '<hr />';
        };
    ?>

</body>

</html>