<div class="titulo">Desafio Data</div>

<?php

    //01/01/1970
    class Data{

        public $dia = 01;
        public $mes = 01;
        public $ano = 1970;
        
        public function apresentar(){
            // "this->" é usado para acessar um atributo dentro do objeto de uma classe, similar a get e set
            echo "Data: {$this->dia} / {$this->mes} / {$this->ano}<br>";
        }
    }

    //exibindo
    $c1 = new Data();
    $c1 -> apresentar();