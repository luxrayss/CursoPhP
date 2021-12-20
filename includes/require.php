<div class="titulo">Require</div>

<?php

     //Require, ao contrário de include, EXIGE que o arquivo seja carregado, caso contrário ocorrerá um erro fatal

     echo 'Usando include com arquivo inexistente... <br>';
     include('arquivo_inexistente.php');
     ini_set('display_errors', 1);

     echo 'Usando require com arquivo inexistente... <br>';
     require('arquivo_inexistente.php');

     echo 'Não achou mesmo... <br>';

      