<div class="titulo">If e Else</div>

<?php 

    if(true){

        echo "Serei impresso?<br>";
        echo "Serei impresso Novamente?<br>";
    }

    if(false){
        echo "Verdadeiro<br>";
        
    }else{
        echo "Falso<br>";

    }

    if(false){
        echo "Passo A<br>";

    }else if(true){
        echo "Passo B<br>";

    }else {
        echo "Último passo<br>";

    }