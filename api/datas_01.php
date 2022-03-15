<div class="titulo">Datas 01</div>

<?php
    //Marco zero do php, quantos segundos se passaram d lá até aqui
    echo time() . '<br>';
    //Formatando data
    echo date('D, d \d\e M \d\e Y H:i A');
    //Data como string
    echo strftime('%A, %d de %B de %Y', time()) . '<br>';
    //definindo local da data
    setlocale(LC_TIME, 'pt_BR.utf-8');
    echo strftime('%A, %d de %B de %Y', time()) . '<br>';

    //mostrando a data de amanhã
    $amanha = time() + (24 * 60 * 60);
    echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

    //mostrando a data da proxima semana
    $proximaSemana = strtotime('+1 week');
    echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

    //Data fixa
    $dataFixa = mktime(15, 30, 50, 1, 25, 1975);
    echo strftime('%A, %d de %B de %Y', $dataFixa) . '<br>';
