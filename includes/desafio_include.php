<div class="titulo">Desafio Include</div>

<?php
    //importando as classes dos arquivos
    include_once('desafio_classe_pessoa.php');
    include_once('desafio_subclasse_usuario.php');

    //instanciando um novo usuário
    $usuario = new Usuario('Lux Lucent', 21, 'luxylucent');
    $usuario->apresentar();
    //Destruindo usuário   
    unset($usuario);