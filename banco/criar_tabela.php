<div class="titulo">Criar Tabela</div> 

<?php

    require_once "conexao.php";

    //cria tabela se não existir
    $sql = "CREATE TABLE IF NOT EXISTS cadastro(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        nascimento DATE,
        email VARCHAR(100) NOT NULL,
        site VARCHAR(100),
        filhos INT,
        salario FLOAT
    )";

    //abrindo conexão 
    $conexao = novaConexao();
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