<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Consultar Registros</div>

<?php
    require_once "conexao.php";

    //consulta
    $sql = "SELECT id, nome, nascimento, email FROM cadastro";

    //conexão
    $conexao = novaConexao();

    $resultado = $conexao->query($sql);

    //array de resultados
    $registros = [];

    //verificando se o resultado da consulta retornou algo, sendo o número de colunas maior que 0 = retornou algo
    if($resultado->num_rows > 0){
        //retorna array associativo, uma chave e valor, chave = nome da coluna, valor = valor correspondente àquela linha 
        while($row = $resultado->fetch_assoc()){
            $registros[] = $row;
        }
    } elseif($conexao->error) {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
    <?php /*exibindo os registros num array de tabela*/ foreach($registros as $registro):?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td>
                    <?=
                        date('d/m/Y', strtotime($registro['nascimento']))
                    ?>
                </td>
                <td><?= $registro['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>