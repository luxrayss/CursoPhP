<div class="titulo">Metodos Mágicos</div>

<?php

    class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome, $idade){
            echo 'Construtor invocado!<br>';
            $this->nome = $nome;
            $this->idade = $idade; 
        }

        function __destruct(){
            echo '<br>E morreu!<br>';
            
        }

        public function __toString(){        
            return "{$this->nome} tem {$this->idade} anos.";

        }

        public function apresentar(){
            echo $this . "<br>";
        }

        //Criando método get com atributo não declarado
        public function __get($atrib){
            echo "Lendo atributo não declarado: {$atrib}<br>";
        }

        //Criando método set para alterar um atribudo que não foi declarado
        public function __set($atrib, $valor){
            echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
        }

        //Chamado sempre que um método de um objeto que não existe
        public function __call($metodo, $params){
            echo "Tentando executar método '${metodo}'";
            echo "<br>, com os parametros: ";
            print_r($params);
            
        }
        
        
    }

    $pessoa = new Pessoa ('Jorge', 40);
    $pessoa->apresentar(); //chamando o __toString
    echo $pessoa->apresentar();
    echo $pessoa, '<br>'; //chamando o __toString
    $pessoa->nome = 'Reinaldo';

    $pessoa->apresentar(); //chama o metodo diretamente sem __call
    echo '<br>';

    //Acessando o método que não foi atribuido
    $pessoa->nomeCompleto = 'Muito Legal!!!'; // __set
    $pessoa->nomeCompleto ; // __get

    echo $pessoa->nome; // acessa o atributo diretamente sem __get

    $pessoa->exec(1, 'teste', true, [1, 2, 3]); // __call pq o método não existe no objeto

    $pessoa = null;

    