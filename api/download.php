<div class="titulo">Desatio  Imagens</div>

<?php

//abrindo sessão
session_start();


//definindo arquivos da sessions/instanciando um array vazio inicial  
$arquivos = $_SESSION['arquivos'] ?? [];

//pasta de upload
$pastaUpload = __DIR__ . '/../files/';

$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    //alterando a sessão para receber o array de arquivos
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Erro no upload de arquivo!";
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
            <a href="/../files/<?= $arquivo ?>">
                <?= /*nome do arquivo*/ $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>