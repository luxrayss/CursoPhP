<div class="titulo">Básico</div>

<?php
    $lista = array(1, 2, 3.4, "texto");
    echo $lista . '<br>';
    var_dump($lista);
    echo '<br>';
    print_r($lista);

    //alterando valor de um array
    $lista[0] = 1234;

    echo '<br>' . $lista[0];
    echo '<br>' . $lista[1];
    echo '<br>' . $lista[2];
    echo '<br>' . $lista[3];
    echo '<br>';
    var_dump($lista[4]);

    //acessando uma letra dentro de um array
    $texto = "Esse é um texto de teste";
    echo '<br>' . $texto[0];
    echo '<br>' . $texto[3];
    echo '<br>' . mb_substr($texto, 10, 1);


