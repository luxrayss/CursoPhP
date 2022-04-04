<div class="titulo">Inserir 02</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php
    //desabilitar erros
    ini_set('display_errors', 0);

    //verificando se há algo no array post
    if(count($_POST) > 0){
        $dados = $_POST;
        //array de erros
        $erros = [];


        //filtro de validação, trim tira os espaços em braco
        if(trim($dados['nome']) === ""){
            $erros['nome'] = 'Nome é obrigatório';
        }

        //validação do campo de data
        if(isset($dados['nascimento'])){
            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
            if(!$data){
                $erros['nascimento'] = 'Data deve estar no formato dd/mm/aaaa';
            }
        }

        //validando campo email
        if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
            $erros['email'] = 'Email inválido';
        }

        //validando url
        if (!filter_var($dados['site'], FILTER_VALIDATE_URL)){
            $erros['site'] = 'Site inválido';

        }

        //validando campo filhos
        $filhoConfig = ["options" => ["min_range" => 0, "max_range"=>20]];
        if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhoConfig) && $dados['filhos'] !=0){
            $erros['filhos'] = 'Quantidade de filhos inválida';

        }

        //salário
        $salarioConfig = ['options' => ['decimal' => ',']];
        if (!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
            $erros['salario'] = 'Salário inválido';
        }

    }
    
    //se não houver erros, ocorrerá a inserção
    if(count($erros) == 0){
        require_once "conexao.php"/

        $sql = "INSERT INTO cadastro (
            nome, nascimento, email, site, filhos, salario)
            VALUES (?, ?, ?, ?, ?, ?)";
            
        $conexao = novaConexao();
        //passando o prepara para conexao
        $stmt = $conexao->prepare($sql);

        //array de parametros que recebem os dados
        $params = [
            $dados['nome'],
            $data ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'],

        ];

        //4 string, int, decimal passando para param
        $stmt->bind_param("ssssid", ...$params);

        //executando
        if($stmt->execute()){
            //destruindo dados
            unset($dados);

        }            

    }

?>

<!-- <?php foreach($erros as $erro):?>

    <div class="alert alert-danger" role="alert">
        <?= "" //$erro?>   
    </div>

<?php endforeach ?> -->

<form action="#" method="post">
    <div class = "form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" 
                class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" 
                id="nome" name="nome" placeholder="Nome"
                value="<?= $dados['nome']?>">
                <div class="invalid-feedback">
                <?= $erros['nome']?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>"
                id="nascimento" name="nascimento" placeholder="Nascimento"
                value="<?= $dados['nascimento']?>">
                <div class="invalid-feedback">
                <?= $erros['nascimento']?>
            </div>
        </div>
    </div>
    <div class = "form-row">
        <div class="form-group col-md-6">
            <label for="email">E-Mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>"
                id="email" name="email" placeholder="E-Mail"
                value="<?= $dados['email']?>">
                <div class="invalid-feedback">
                <?= $erros['email']?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>"
                id="site" name="site" placeholder="Site"
                value="<?= $dados['site']?>">
                <div class="invalid-feedback">
                <?= $erros['site']?>
            </div>
        </div>
    </div>
    <div class = "form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>"
                id="filhos" name="filhos" placeholder="Quantidade de Filhos"
                value="<?= $dados['filhos']?>">
                <div class="invalid-feedback">
                <?= $erros['filhos']?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>"
                id="salario" name="salario" placeholder="Salário"
                value="<?= $dados['salario']?>">
                <div class="invalid-feedback">
                <?= $erros['salario']?>
            </div>
        </div>
    </div>
    <button class= "btn btn-primary btn-lg">Enviar</button>
</form>

