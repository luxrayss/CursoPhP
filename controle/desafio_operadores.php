<div class="titulo">Desafio Operadores</div>

<?php

    /*Se o trabalho de terça e quinta der certo eles tomam sorvete e compra TV 50, se apenas um der certo 
    eles tomam sorvete e compram TV 32, se nenhum der certo eles ficam em casa*/ 

    
    $trabTer = false;
    $trabQuin = true;

    if ($trabQuin == true and $trabTer == true){
        echo "Eles vão tomar sorvete e comprar a TV de 50";
    }else if($trabQuin == true or $trabTer == true){
        echo "Eles vão tomar sorvete e comprar a TV de 32";

    }else{
        echo "Eles vão ficar em casa";

    }

