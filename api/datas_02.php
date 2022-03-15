<div class="titulo">Datas 02</div>

<?php

    $formatoData1 = 'D, d \d\e M \d\e Y';
    $formatoData2 = '%A, %d de %B de %Y';
    $formatoData3 = '%A, %d de %B de %Y - %H:%M:%S';

    $agora = new DateTime();
    print_r($agora);
    echo '<br>';

    echo $agora->format($formatoData1) . '<br>';

    //deixando em portuguÊs
    setlocale(LC_TIME, 'pt_BR');
    echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

    //Menos dois dias
    $amanha = new DateTime('+1 day');
    echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

    $amanha->modify('+1 day');
    echo strftime($formatoData3, $amanha->getTimestamp()) . '<br>';

    $dataPassada = new DateTime('2000-05-17');
    $dataFutura = new DateTime('2030-11-26');
    $outraData = new DateTime('2030-11-26');
    
    //comparando datas
    echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br> ';

    //alterando o time zone
    $tz = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime(null, $tz);
    echo $agora->format('d/M/Y H:i:s');