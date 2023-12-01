<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Variáveis Constantes;

    //Ambiente de Desenvolvimento;
    //BD_URL -> endereço_bd_dev
    //BD_USUARIO -> usuario_dev
    //BD_SENHA -> senha_dev

    //Ambiente de Produção;
    //BD_URL -> endereco_bd_prod
    //BD_USUARIO -> usuarop_prod
    //BD_SENHA -> senha_prod

    //A função define() é a opção mais conhecida do PHP para criar constantes.
    //Utilizamos essa função quando precisamos declarar uma constante com escopo global, isto é, fora do escopo de uma classe.

    //Dois parâmetros: nome da variável (string) e valor; 
    define('BD_URL', 'endereco_bd_dev');
    define('BD_USUARIO', 'usuario_dev');
    define('BD_SENHA', 'senha_dev');

    //Sintaxe de recuperação, não precisa de '$';
    echo BD_URL . '</br>';
    echo BD_USUARIO . '</br>';
    echo BD_SENHA;
?>
</body>
</html>