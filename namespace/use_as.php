<?php namespace Outro\Nome; ?>

<div class="titulo">Use & As</div>


<?php

    echo __NAMESPACE__ . '<br>';

    include ('use_as_arquivo.php');

    function soma ($a, $b){
        return $a . $b; //Erro proposital

    }

    
    class Classe {
        public $var;

        function func(){
            echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br>';

        }
    }

    echo \Nome\Bem\Grande\constante . '<br>';

    //Usando o "use" para usar a constante sem ter que utilizar o caminho 
    use const Nome\Bem\Grande\constante;
    echo constante . '<br>';
    //Usando o "use" juntamente a um alias/apelido
    use Nome\Bem\Grande as ctx;
    echo soma(1,2) . '<br>';
    echo ctx\soma (1,2) . '<br>';
    
    use function Nome\Bem\Grande\soma as somaReal;
    echo somaReal(10, 23) . '<br>';

    $a = new Classe();
    $a->func();

    $b = new \Nome\Bem\Grande\Classe();
    $b->func();

    $c = new ctx\Classe();
    $c->func();

    use Nome\Bem\Grande\Classe as D;

    $d = new D();
    $d-> func();

    