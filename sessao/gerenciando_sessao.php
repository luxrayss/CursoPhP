<div class="titulo">Gerenciando Sessao</div>

<?php   

    session_start();
    //Mostrando o id da sessão
    echo session_id();

    //Acessando o endereço de memória do id da sessão
    $contador = &$_SESSION['contador'];
    $contador = $contador ? $contador + 1 : 1;

    //regerando a sessão
    if($_SESSION['contador'] % 5 === 0){
        session_regenerate_id();

    }

    