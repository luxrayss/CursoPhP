<div class="titulo">Upload</div>

<?php 
print_r($_FILES);

if($_FILES && $_FILES['arquivo']) {
    //diretorio
    $pastaUpload = '/wamp64/www/curso-php/files/';
    //nome do arquivo
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    //diretorio temporario
    $tmp = $_FILES['arquivo']['tmp_name'];

    //Movendo o arquivo do diretorio temporario temporario
    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo válido e enviado com sucesso.";
    } else {
        echo "<br>Erro no upload de arquivo!";
    }
}
?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>