<div class="titulo">Argumentos e Retorno</div>

<?php

    function obterMensagem(){
        return 'Seja bem vindo(a)!';
    }

    obterMensagem(); 
    $m = obterMensagem();
    echo $m;
    echo '<br>', obterMensagem();
    echo '<br>';
    var_dump(obterMensagem());


    //Criando função que recebe parametros
    function obterMensagemComNome($nome){

        return "Bem vindo, {$nome}";
    }
    

    //Exibindo função com os parâmetros
    echo '<br>', obterMensagemComNome('Wagner');
    echo '<br>', obterMensagemComNome('Tiago');

    function soma($a, $b){
        return $a + $b;

    }

    $x = 4;
    $y = 5;
    echo '<br>', soma (4, 5);
    echo '<br>', soma ($x, $y);

    //conferindo se a variável é alterada ou apenas a referência à ela
    function trocaValor($a, $novoValor){
        $a = $novoValor;

    }

    //O que é alterado é a referência e não a variável
    $variavel = 1;
    trocaValor($variavel, 3);
    echo '<br>', $variavel;

    //Alterando a variável dentro da função

    function trocaValorDeVerdade(&$a, $novoValor){
        $a = $novoValor;
    }

    trocaValorDeVerdade($variavel, 5);
    echo '<br>', $variavel;