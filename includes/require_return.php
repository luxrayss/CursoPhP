<div class="titulo">Require e Return</div>

<?php
    $valorReturno = require('return_usado.php');
    echo "$valorRetorno<br>";
    echo $variavelRetornada;

    //Vendo o diretório que está sendo executado
    echo __DIR__ . '<br>';

    $valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
    // var_dump($valorRetorno2);
    echo "$valorRetorno2<br>";
    echo "$variavelDeclarada<br>";
    
