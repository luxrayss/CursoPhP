<div class="titulo">Construtor Destrutor</div>

<?php

    class Pessoa {
        public $nome;
        public $idade;
    


        function __construct($novoNome, $idade = 18){
            echo 'Construtor invocado! <br>';
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct(){
            echo 'E morreu!';
        }

        public function apresentar(){
            echo "{$this->nome}, {$this->idade} anos<br>";
        }

    }

    //criando objeto e chamando
    $pessoa = new Pessoa('Rebeca Maria', 40);
    $pessoa->apresentar();

    //Destruindo objeto
    unset($pessoa);