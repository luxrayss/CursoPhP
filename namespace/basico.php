<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php

    //referenciando o namespace atual
    echo __NAMESPACE__ . '<br>';
    //declarando uma constante associada ao namespace, ao declarar, ela é automaticamente associada ao namespace
    const constante1 = 123;
    //declarando uma nova constante associada ao namespace (nome do namespace\nome da constate, valor);
    define('contexto\constante2', 234);
    //declarando uma nova constante associada sem usar diretamente o nome do namespace
    define(__NAMESPACE__ . '\constante3', 345);
    //criando uma nova cosntante associada a outro namespace
    define ('outro_contexto\constante4', 456);

    echo constante1 . '<br>';
    echo constante2 . '<br>';
    //acessando com caminho absoluto
    echo \contexto\constante2 . '<br>';
    echo constant(__NAMESPACE__ . '\constante3') . '<br>';
    //acessando a constante definida em outro namespace
    echo \outro_contexto\constante4 . '<br>';

    //acessando a função direto
    function soma ($a, $b) {
         $result = $a + $b;
         return $result;
    }


    //acessadnoa  função usando caminho absoluto
    echo \contexto\soma(400, 20) . '<br>';

    //Criando uma função com nome igual a uma já existente na api do PHP e resolvendo conflitos
    function strpos($str, $text){
        echo "Buscando o texto '{$text}' em '{$str}'<br>";
        return 1;

    }

    echo strpos ('Texto genérico para busca', 'busca') . '<br>';
    //chamando a versão das API do php
    echo \strpos ('Texto genérico para busca', 'busca') . '<br>';
    