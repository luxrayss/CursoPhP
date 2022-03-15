<?php

    //Superclasse
        class Pessoa{
            public $nome;
            public $idade;

        function __construct($novoNome, $idade){
            $this->nome = $novoNome;
            $this->idade = $idade;
            
            }

            function __destruct(){
                echo 'Pessoa diz: Tchau!';

            }

            public function apresentar(){
                echo "{$this->nome}, {$this->idade} anos <br>";
            }       

        }