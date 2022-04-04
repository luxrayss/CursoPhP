<div class="titulo">Alterar PDO</div>

<?php

    //Comando SQL para dar update
    $sql = "UPDATE cadastro
    SET nome = ?, nascimento = ?, email = ?,
    WHERE id = ?";

    //Abrindo conexão
    $conexao = novaConexao();
    //Tratando os dados para não haver sql injetion
    $stmt = $conexao->prepare($sql);

    //dados para ser injetados
    $resultado = $stmt->execute([
        'Truco',
        '1980-12-12',
        'juuj@juuj.com',
        'http://gui.co',
        1,
        12000,
        22
    ]);


    if($resultado){
        echo "Sucesso :)";

    }else{
        //mostra o erro caso haja algum
        print_r($stmt->errorInfo());
        
    }
