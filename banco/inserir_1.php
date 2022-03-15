<div class="titulo">Inserir 1</div>

<?php

    //arquivo de conexão
    require_once "conexao.php";

    $sql = "INSERT INTO cadastro
        (nome, nascimento, email, site, filhos, salario)
        VALUES (
            'Cilica',
            '1994-03-02',
            'cilica@email.com',
            'https://cilica.sites.com.br',
            1,
            13000
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