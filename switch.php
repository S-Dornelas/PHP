<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //Switch - Cases;
        $opcao = 'a';

        switch ($opcao) {
            case 1:
                echo 'Opção 1';
                break;
            case 2:
                echo 'Opção 2';
                break;
            case 3:
                echo 'Opção 3';
                break;
            default: //Default é opção, coom se fosse um 'else';
                echo 'Opção selecionada não existe';
                break;
        }
    ?>
</body>

</html>