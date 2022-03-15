<div class="titulo">Criar Banco</div>

<?php

//adicionando arquivo da conexão
require_once "conexao.php";

$conexao = novaConexao(null);
//criando uma nova schema
$sql = 'CREATE DATABASE curso_php';
//executando a query
$resultado = $conexao->query($sql);

//verificando se conectou com o banco
if($resultado) {
    echo "Sucesso";

}else{
    echo "Erro: " . $conexao->error;

}

//fechando conexão
$conexao->close();