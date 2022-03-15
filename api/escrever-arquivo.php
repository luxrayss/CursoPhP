<div class="titulo">Escrever Arquivo</div>

<?php 
    
    //Arquivo que será a berto e W (write) é o modo 
    $arquivo = fopen('teste.txt', 'w');
    //escrevendo no arquivo
    fwrite($arquivo, "valor inicial\n");
    $str = "Segunda linha\n";
    fwrite($arquivo, $str);
    //fechando o arquivo
    fclose($arquivo);

    //reabrindo
    $arquivo = fopen('teste.txt', 'w');
    fwrite($arquivo, "Novo conteudo\n");
    fclose($arquivo);

    //abrindo o arquivo no modo append, incrementar texto
    $arquivo = fopen('teste.txt', 'a');
    fwrite($arquivo, "com novos valores\n");
    fwrite($arquivo, "Adicionados em um segundo momento\n");
    fclose($arquivo);

    ini_set('display_errors', 1);
    //'X' Garante que o arquivo não exista
    $arquivo = fopen('teste2.txt', 'x');
    fwrite($arquivo, "Arquivbo novo!!!");
    fclose($arquivo);