<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Operador Ternário - Condição para seguir ou não, determinado fluxo. Retornar true ou false, apenas uma única instrução, diferente do If..Else que retornar blocos de instruções, podendo ter mais de uma instrução;
    //Operadores ternários possuem menos código, logo, menos verboso; 

    $clienteCartao = true;
    $clienteCompra = 200.00;

    $valorFrete = 49.90;
    $recebeuDescontoFrete = true;

    if ($clienteCartao && $clienteCompra >= 300) {
        $valorFrete = 0;
    } else if ($clienteCartao && $clienteCompra >= 200) {
        $valorFrete = 15;
    } else if ($clienteCartao && $clienteCompra >= 100) {
        $valorFrete = 25;
    } else {
        $recebeuDescontoFrete = false;
    }
    ?>

    <h1>Detalhes do pedido<h1>

            <p>Possui cartão da loja?
                <!--Operador Ternario: <condição> ? true : false-->
                <!--Impressão direta no browser-->
                <? $clienteCartao == true ? 'Sim' : 'Não'; ?>
            </p>

            <?php
            /*
            if ($clienteCartao) {
                echo 'Sim';
            } else {
                echo 'Não';
            }
            */
            ?>

            <p>Valor da compra: <?= $clienteCompra ?></p>

            <p>Frete grátis?</p>
            <?php
            //Operador Ternario: <condição> ? true : false
            //Atribuindo o operador ternário para uma variável
            $operadorFrete = $recebeuDescontoFrete == true ? 'Sim' : 'Não';

            /*
            if ($recebeuDescontoFrete) {
                echo 'Sim';
            } else {
                echo 'Não';
            }
            */
            ?>
            
            <p>Valor do frete: <?= $valorFrete ?></p>
</body>

</html>