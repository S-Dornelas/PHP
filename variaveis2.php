<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //string
        $nome = 'Sid';
        //int
        $idade = 36;
        //float
        $altura = 1.83;
        //boolean
        //true = 1 / false = vazio
        $isDev = true;
    ?>

    <h1>Ficha Cadastral:</h1></br>
    <p>Nome: <?= $nome?></p>
    <p>Idade: <?= $idade?></p>
    <p>Altura: <?= $idade?></p>
    <p>É desenvolvedor? <?= $isDev?></p>
</body>
</html>