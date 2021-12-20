<div class="titulo">Classe</div>

<?php

    class Cliente{
        public $nome = 'Anônimo';
        public $idade = 18;
        
        public function apresentar(){
            // "this->" é usado para acessar um atributo dentro do objeto de uma classe, similar a get e set
            echo "Nome: {$this->nome} Idade: {$this->idade} <br>";
        }
    }

    //Criando objeto cliente e modificando
    $c1 = new Cliente();
    $c1->nome = 'Ana Silva';
    $c1->idade = 24;
    //exibindo
    $c1 -> apresentar();

    $c2 = new Cliente();
    $c2->nome = 'Yeet';
    $c2->idade = 18;
    $c2 -> apresentar();
    

    //01/01/1970

 
    