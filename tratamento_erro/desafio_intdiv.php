<?php 
//Declarando namespace
namespace Aritmetica;?>

<?php

    //Classe construtora
    class NaoInteiroException extends \Exception {

    }

    //Função
    function intdiv($a, $b){
        //Exceção de divisão por zero
        if($b == 0){
            throw new \DivisionByZeroError();
        } 
        //Número não inteiro
        if ($a % $b > 0){
            throw new NaoInteiroException();
        }
        //Caso o divisão ocorra tudo bem
        return $a / $b;

    } 