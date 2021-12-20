<div class="titulo">Traits #01</div>

<?php
    //Traits are a mechanism for code reuse in single inheritance languages such as PHP. 

trait validacao{
    public $a = 'Valor a';
        public function validarString($str){
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor{
        public $b = 'Valor b';
        private $c = 'Valor c (privado)';

        public function validarStringMelhor($str){
            //trim — Retira espaço no início e final de uma string
            return isset ($str) && trim($str);
        }
    }

    //importando ambas as funções para a classe Usuario
    class Usuario {
        use validacao, validacaoMelhor;

        public function imprimirValorC(){
            echo '<br>', $this->c;
        }
    }

    $usuario = new Usuario();
    var_dump($usuario->validarString(' '));
    echo '<br>';
    var_dump($usuario->validarStringMelhor(' '));
    echo '<br>';
    echo $usuario->a, '<br>', $usuario->b;
    echo $usuario->imprimirValorC();
