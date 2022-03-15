<?php namespace App;?>

<div class="titulo">Sub-Namespaces</div>

<?php

    echo __NAMESPACE__ . '<br>';

    const constante = 123;

    namespace App\Principal;

    echo __NAMESPACE__ . '<br';
    const constante = 234;

    namespace App\Principal\Especifico;
    echo __NAMESPACE__ . '<br>';
    const constante = 345;


    echo constante . '<br>';

    //acessando as "cosntante" anteriores
    echo constant ('\\' . __NAMESPACE__ . '\constante') . '<br>';

    