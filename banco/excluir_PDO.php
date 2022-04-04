<div class="titulo">Excluir PDO</div>

<?php  

require_once "conexao_pdo.php";
$sql = "DELETE FROM cadastro id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

if($stmt->execute([15])){
    echo "Sucesso :)";

}else{
    echo "Erro ";
    print_r($stmt->errorInfo());

}