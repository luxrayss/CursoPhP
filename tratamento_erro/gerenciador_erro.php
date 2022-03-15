<div class="titulo">Error Handler</div>

<?php

    //Habilitando exibição de erros
    ini_set('display_errors', 1);

    //Definindo quais tipos de erros serão exibidos, nesse caso não serão exibidas as advertências

    error_reporting(E_ERROR);
    echo 4 / 0 . '<br>';

    //Mostrando todos os tipos de erros
    error_reporting(E_ALL);
    echo 4 / 0 . '<br>';

    echo '<hr>';

    //Não exibir nenhum erro
    error_reporting(~E_ALL);
    echo 4 / 0 . '<br>';
    
    // error_reporting(E_ALL);
    // echo 4 / 0 . '<br>';
    // include 'arquivo_inexistente.php';

    //Filtrando mensagem de erro
    function filtraMensagem($errno, $errstring){
        $text = 'include';
        // $text = 'by zero';
        //Retornando um valor inteiro, espaço no começo da string para começar no índice 1 e evitar que retorne o indice 0
        return !!stripos(" $errstring", $text);

    }

    //Setando quando a função será chamada
    set_error_handler('FiltrarMensagem', E_WARNING);

    echo '<hr>';
    echo 4 / 0 . '<br>';
    include 'arquivo_inexistente.php';

