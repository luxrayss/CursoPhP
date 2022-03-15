<div class="titulo">Lê Arquivo</div>

<?php

    $arquivo = fopen('texte.txt', 'r');
    //lendo 10 bytes do arquivo
    echo fread($arquivo, 10);
    echo '<br>';
    echo fread($arquivo, 10);
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    //Lendo todo o arquivo
    echo fread($arquivo, filesize('teste.txt'));
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    var_dump(fgetc($arquivo));
    echo '<br>';
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    while(!feof($arquivo)){        
        echo fgets($arquivo) . '<br>';

    }

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    while(!feof($arquivo)){
        //le o arquivo caracter por caracter
        echo fgetc($arquivo) . '<br>';

    }
    fclose($arquivo);

    echo '<hr>';

    //modo leitura e escrita
    $arquivo = fopen('teste.txt', 'r+');
    echo fgets ($arquivo), '<br>';
    echo fgets ($arquivo), '<br>';
    fwrite($arquivo , "\nAdicionado durante a leitura");
    fclose($arquivo);

    echo "Fim!";
    