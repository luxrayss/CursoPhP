<?php
    //Iniciando sessão
    session_start();
    //Limpando sessão'
    session_destroy();
    header('Location: /curso-php/sessao/basico_sessao.php');