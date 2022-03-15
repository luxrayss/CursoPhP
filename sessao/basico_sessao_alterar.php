<?php
    
    //Permitindo o uso de sessões
    session_start();
    print_r($_SESSION);

    $_SESSION['email'] = 'gabriel_alterado@hotmail.com.br';
    ?>

    <p>
        <b>Nome: </b> <?= $_SESSION['nome']?><br>
        <b>Email: </b> </b> <?= $_SESSION['email']?>
    </p>

    

    <p>
        <a href='/curso-php/sessao/basico_sessao.php'> Voltar</a><br>

        <a href='/curso-php/sessao/basico_sessao_limpar.php'>Limpar Sessão</a>
    </p>

    