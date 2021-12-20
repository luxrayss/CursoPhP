<div class="titulo">Heranca</div>

<?php
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
            echo "@{$this->login}:!!! ";   
            parent::apresentar();

           
        }
    }
    
    $usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
    $usuario->apresentar();   
    unset($usuario);