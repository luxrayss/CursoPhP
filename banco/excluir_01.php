<div class="titulo">Excluir Registro 01</div>

<?php

    require_once "conexao.php";

    //Query para deletar o 3° usuario
    $sql = "DELETE FROM cadastro WHERE id = 3";

    //conexão
    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if($resultado){
        echo "Sucesso";
    }else{
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();