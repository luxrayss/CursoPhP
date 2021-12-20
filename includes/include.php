<div class="titulo">Include</div>

<?php

    echo 'Executei essa linha do arquivo include<br>';
    //Chamando as funções do arquivo "include_arquivo.php"
    include ('include_arquivo.php');

    echo '<br>';

    //Chamando função soma do arquivo "include_arquivo"
    echo soma (3, 8) . '!<br>';
    echo "O conteúdo da varável é '{$variavel}' . ";