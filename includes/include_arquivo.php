<div class="titulo">Include Arquivo</div>

<?php

    echo 'Carregando: include_arquivo.php';

    $variavel = 'Estou definida';

    if(!function_exists('soma')){
        function soma($a, $b){
            return $a + $b;
    
        }

    }
    