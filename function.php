<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //Função do tipo 'void', pois não tem retorno;
        //Definição da função;
        function exibirBoasVindas() {
            echo 'Sejam bem-vindas(os)';
        }
        //Chamada da função;
        exibirBoasVindas();

        //Função com retorno 'return';
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;

            return $area;
        }
        echo '</br>';
        $resultado = calcularAreaTerreno(10, 5);
        echo $resultado;
    ?>

</body>

</html>