<div class="titulos">Variáveis</div>

<?php
    $nuemroA = 13;
    echo $nuemroA, '<br>';
    var_dump($nuemroA);

    echo '<br>';
    $a = 3;
    $b = 16;
    $soma =  $a + $b;
    echo $soma;

    echo '<br>';

    echo isset ($soma);

    unset ($soma);
    echo '<br>';
    var_dump($soma);

    $variavel = 10;
    echo '<br>' . $variavel;
    
    $variavel = "Agora sou uma string";
    echo '<br>' . $variavel;

    echo '<br>';
    var_dump($_SERVER["HTTP_HOST"]);
