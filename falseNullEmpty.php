<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //false - Tipo variável boolean;
        //null e empty - valores especiais;

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //Valores null
        if (is_null($funcionario1)) {
            echo 'A variável é null<hr />';
        } else {
            echo 'A variável não é null<hr />';
        };

        if (is_null($funcionario2)) {
            echo 'A variável é null<hr />';
        } else {
            echo 'A variável não é null<hr />';
        };

        if (is_null($funcionario3)) {
            echo 'A variável é null<hr />';
        } else {
            echo 'A variável não é null<hr />';
        };

        //Valores vazios
        if (empty($funcionario1)) {
            echo 'A variável é empty<hr />';
        } else {
            echo 'A variável não é empty<hr />';
        };

        if (empty($funcionario2)) {
            echo 'A variável é empty<hr />';
        } else {
            echo 'A variável não é empty<hr />';
        };

        if (empty($funcionario3)) {
            echo 'A variável é empty<hr />';
        } else {
            echo 'A variável não é empty<hr />';
        };

        $var = 0;

        // Avaliado como verdadeiro porque $var está vazia
        if (empty($var)) {
            echo '$var é 0, vazia ou não definida';
        }

        // Avaliado como verdadeiro porque $var está definida
        if (isset($var)) {
            echo '$var está definida embora esteja vazia';
        }

        //Null é apenas null;
        //Empty pode ser null;
        //False pode ser empty;

        // Veja Também:

        // isset() - Determina se uma variável está declarada e é diferente de null
        // __isset()
        // unset() - Remove a definição de uma variável informada
        // array_key_exists() - Checa se uma chave ou índice existe em um array
        // count() - Conta todos os elementos de um array ou de um objeto Countable
        // strlen() - Retorna o tamanho de uma string
    ?>

</body>

</html>