<?php 
session_start();

//recebendo os dados dos campos
$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']) {
    //criando novos usuários
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "1234567",
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outro@email.com.br",
            "senha" => "7654321",
        ],
        [
            "nome" => "Lux",
            "email" => "lux@l.com",
            "senha" => "4002",
        ],
    ];

    foreach($usuarios as $usuario) {
        //Validando as senhas que foram colocadas nos campos
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
            //zerando os erros no array de erros
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            //Tempo de expiração
            $exp = time() + 60 * 60 * 24 * 30;
            //Definindo cookies
            setcookie('usuario', $usuario['nome'], $exp);
            //redirecionar para página index após o login
            header('Location: index.php');
        }
    }
    //Exibindo erro caso os dados entrados estejam incorretos
    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if ($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>