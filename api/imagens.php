<div class="titulo">Desafio Imagens</div>

<?php

    /*
    Desafio:
    -Filtrar apenas arquivos .png
    -exibir as imagens na pagina usando a tag img e nn a tag de links

    */

    //abrindo sessão
    session_start();
    session_destroy();


    //definindo arquivos da sessions/instanciando um array vazio inicial  
    $arquivos = $_SESSION['arquivos'] ?? [];

    //Configurando os tipos de arquivos que serão permitidos no upload
    $formatosPermitidos = array("png", "jpeg", "jpg");

    //pasta de upload
    $pastaUpload = dirname(__DIR__,1) . "/files/";

    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];
    var_dump($pastaUpload);
    var_dump($nomeArquivo, $tmp, $arquivo);

   
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
    var_dump($extensao);
    if(in_array($extensao, $formatosPermitidos)){        

        if (move_uploaded_file($tmp, $arquivo)) {
            echo "<br>Arquivo válido e enviado com sucesso.";
            $arquivos[] = $pastaUpload . $nomeArquivo;
            var_dump($arquivos);
            //alterando a sessão para receber o array de arquivos
            $_SESSION['arquivos'] = $arquivos;

        }

    } else {        
        echo "$extensao não é permitido <br>";

    }

?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php
    //Criando um foreach para percorrer o array dos arquivos e criar um link de download para cada um
    foreach($arquivos as $arquivo): ?>
        <li>
            <img src="<?= $arquivo ?>" width="500" height="600"/>

        </li>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>