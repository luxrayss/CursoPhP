<div class="titulo">Inserir PDO</div>

<?php

    //importanto arquivo conexão
    require_once "conexao_pdo.php";

    $sql = "INSERT INTO cadastro
    (nome, email, nascimento, site, filhos, salario)
    VALUES(
        'Guilherme Filho',
        'gui@hotmail.com',
        '1998-7-21',
        'http://gui.com.br',
        0,
        3000
    )";
    
    $conexao = novaConexao();
    //ver os metodos de uma classe
    //print_r(get_class_methods($conexao));

    if($conexao->exec($sql)){
        $id = $conexao->lastInsertId();
        echo "Novo cadastro com id $id."; 
    }else{
        echo $conexao->errorCode () . '<br>';
        print_r($conexao->errorInfo());
            
    }
