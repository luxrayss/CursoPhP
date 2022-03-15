 <div class="titulo">Desafio intdiv</div>

 <?php
 
    //importando do outro arquivo
    require_once 'desafio_intdiv.php';
    //Usando as funções do namespace do outro arquivo
    use function \Aritmetica\intdiv;

    try{
        echo intdiv(8, 3) . '<br>';
    } catch (\Aritmetica\NaoInteiroException $e){
        echo 'Resultado não é um número inteiro <br>';
    }

    try {
        echo intdiv(8, 0) . '<br>';

    }catch (DivisionByZeroError $e){
        echo 'Divisão por zero <br>';
    }

    //Testando
    echo intdiv(8, 2) . '<br>';
    //Testando com a função original do PHP
    echo intdiv (8,2) . '<br>';