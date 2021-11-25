<div class="titulo">Operador Ternario</div>

<?php

    $idade = 70;
    $status;

    //Verificação de uma linha para substituir IF/Else
    $status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
    echo "$status<br>";

    $status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : 'Maior de idade'; 