<div class="titulo">Mapa</div>

<?php
    $dados = array(
        "idade" => 25, 
        "cor" => "Verde",
        "peso" => 49.8 

    );

    print_r($dados);

    var_dump($dados[0]);
    echo '<br>' . $dados["idade"];
    echo '<br>' . $dados["cor"];
    echo '<br>' . $dados["peso"];
    echo '<br>';
    var_dump($dados["outra_informacao"]);

    //atribuição manual de índice no array
    $lista = array(
        "a",
        "cinco" => "b",
        "c",
        8 => "d",
        "e",
        6 => "f",
        "g",
        8 => "h"
    );
    //Array ([0] => a [cinco] => b  )

    //adicionando elementos no array
    $lista[] = 'i';
    echo '<br>';
    print_r($lista);

    //atribuição manual de índice no array 2
    $lista['vinte'] = 'i'; 

    