<?php

    echo 'Carregando include_once_arquivo <br>';

    $variavel = 'Estou definida';

    if(function_exists('soma')){        
        function somar ($a, $b){
            return $a + $b;
            
        }

    }