<div class="titulo">Sessão</div>

<?php

    //Abrindo sessão
    session_start();

    //Verificando o que há dentro da sessão
    print_r($_SESSION);
    echo '<br>';
 
    if(!$_SESSION['nome']){
        $_SESSION['nome'] = 'Gabriel';
        
    }

    if(!$_SESSION['email']){
        $_SESSION['email'] = 'gabriel@gmail.com';
    }

    print_r($_SESSION);

    ?>

    <p>
        <a href = '/curso-php/sessao/basico_sessao_alterar.php'>Alterar Sessão</a><br>
        <a href='/curso-php/sessao/basico_sessao_limpar.php'>Limpar Sessão</a>
    </p>