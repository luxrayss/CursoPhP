<div class="titulo">Valor vs Referência</div>

<?php

    //Atribuição por valor
    $variavel = 'Valor Inicial';
    echo $variavel;

    $variavelValor = $variavel;
    echo "<br>$variavelValor";
    
    $variavelValor = 'Novo Valor';
    echo "<br>$variavel";
    echo "<br>$variavelValor";

    //Atribuição por refer^rncia

    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referencia';

    echo "<br>$variavel";
    echo "<br>$variavelReferencia";

    