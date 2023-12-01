<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Imaginar trabalhar com um E-commerce;
    //Se o cliente tiver o cartão da loja;
    //E sua compra for maior que R$100,00;
    //Terá direito ao frete grátis!
    
    $clienteCartao = true;
    $clienteCompra = 95.00;

    $valorFrete = 49.90;
    $recebeuDescontoFrete = false;

    if ($clienteCartao && $clienteCompra >= 100) {
        $valorFrete = 0;
        $recebeuDescontoFrete = true;
    }
    ?>

    <h1>Detalhes do pedido<h1>
    <p>Possui cartão da loja?</p>
        <?php
        if ($clienteCartao) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
        ?>

    <p>Valor da compra: <?=$clienteCompra?></p>

    <p>Frete grátis?</p>
        <?php
        if ($recebeuDescontoFrete) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
        ?>

    <p>Valor do frete: <?=$valorFrete?></p>
</body>

</html>