<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Desafio Consulta</div>

<?php
    //Require conexão
    require_once ("conexao.php");

    //Query
    $sql = "SELECT id, nome, email FROM cadastro";

    //abrindo conexão
    $conexao = novaConexao();

    //Recebendo a query
    $resultados = $conexao->query($sql); 

    //Array de dados
    $registros = [];

    if($resultados->num_rows > 0){
        while($row = $resultados->fetch_assoc()){
            $registros[] = $row;

        }
    }elseif($conexao->error){
        echo "Erro: " . $conexao->error;
    }

    //fechando conexão
    $conexao->close();

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>E-Mail</th>
    </thead>
    <tbody>
    <?php foreach($registros as $registro) :?>
        <tr>
            <td><?= $registro['id']?></td>
            <td><?= $registro['nome']?></td>
            <td><?= $registro['email']?></td>
        </tr>
            <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>
