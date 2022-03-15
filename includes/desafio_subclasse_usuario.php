<?php

    //Subclasse extendendo à super-classe
    class Usuario extends Pessoa{
        public $login;

        //construindo pessoa e usuário usando o construct da super-classe
        function __construct($nome, $idade, $login){
            // $this->nome = $nome;
            // $this->idade = $idade;
            parent:: __construct($nome, $idade);
            $this->login = $login;
            echo 'Usuário Criado! <br>';
        }

        //destruindo ambas as classes 
        function __destruct(){
            echo 'Usuário diz: Tchau!<br>';
            parent:: __destruct();

        }
        //herdando a função
        public function apresentar(){  
            echo "Usuário: {$this->login}:!!! ";   
            parent::apresentar();

           
        }
    }