<div class="titulo">Desafio Recurcao</div>

<?php

    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

    //Imprimindo o array de forma recursiva com os símbolos corretos de acordo com o nível do array [] = >, [[]] = >>, [[[]]] = >>>
    
    function imprimirArray($array, $nivel = '>'){
        foreach($array as $elemento){
            //verificando se o elemento é um array, caso não seja, a função é parada
            if(is_array($elemento)){
                imprimirArray($elemento, $nivel . $nivel[0]);
            }
            echo "$nivel $elemento<br>";

        }
    }
    
    //Com símbolo padrão ">"
    imprimirArray($array);
    //Com símbolo personalizado "#"
    imprimirArray($array, '#');

    