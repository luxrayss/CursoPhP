<div class="titulo">Tratamento Erro</div>

<?php

    try{
        echo intdiv(7, 0);

    }catch(Error $e){
        echo 'Teve um erro aqui<br>';
    }

    try{
        throw new Exception("Um erro aconteceu");
        echo intdiv(7,0);

    }catch(DivisionByZeroError $e){
        echo 'Divisão por zero <br>';
    }catch(Throwable $e) {
        echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
    }finally{
        echo 'Sempre executado! <br>';
    }

    echo 'Execução continua... <br>';

    