<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //date(formato) - Recupera a data atual;
        //date_default_timezone_get(timezone) - Recuperar a timezone default da aplicação;
        //date_default_timezoze_set(timezone) - Atualizar o timezone default da aplicação;
        //strtotime(data) - Transforma datas textuais em segundos;

        echo date('d/m/Y - H:i');
        echo '<br />';

        echo date_default_timezone_get();
        echo '<br />';

        date_default_timezone_set('America/Sao_Paulo');
        
        echo date('d/m/Y - H:i');
        echo '<hr />';

        $dataNascimento = '1986-07-17';
        $dataAtual = date('Y-m-d');


        $timeNascimento = strtotime($dataNascimento);
        $timeAtual = strtotime($dataAtual);

        echo $dataNascimento  . ' - ' . $timeNascimento;
        echo '<br />';
        echo $dataAtual  . ' - ' . $timeAtual;

        $diferencaTime = $timeAtual - $timeNascimento;
        echo '<br />';

        $segundosPorDia = 24 * 60 * 60;

        echo 'Total de dias são: ' . $diferencaTime / $segundosPorDia;
    ?>

</body>

</html>