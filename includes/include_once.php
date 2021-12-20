<div class="titulo">Include Once</div>

<?php
    // include('include_once_arquivo.php');

    // echo "Variável = '{$variavel}'.<br>";
    // $variavel = 'Variavel alterada';
    // echo "Variável = '{$variavel}'.<br>";

    // //A partir daqui a "$variavel" foi reinicializada
    // include('include_once_arquivo.php');
    // echo "Variável = '{$variavel}'.<br>";
    // $variavel = 'Variavel alterada de novo';
    // echo "Variável = '{$variavel}'.<br>";

    //Função é definida uma única vez
    include_once('include_once_arquivo.php');
    echo "Variavel = '{$variavel}'.<br>";

    //Ele verifica que a função já foi carregada e não carrega novamente, mantendo a alteração da $variavel
    require_once('include_once_arquivo.php'); 
    echo "Variavel = '{$variavel}'.<br>";


