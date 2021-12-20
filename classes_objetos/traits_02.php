<div class="titulo">Traits #02</div>

<?php

use validacaoMelhor as GlobalValidacaoMelhor;

trait validacao {
        public function validarString($str){
            //Validar a string para que não aceite espaços
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor{
        public function validarString($str){
            return isset($str) && trim ($str);
        }
    }

    class Usuario{
        use validacao, GlobalValidacaoMelhor{
            //Dizendo ao código qual dos dois métodos usar
            validacaoMelhor::validarString insteadof validacao; 

            //Atribuindo um Alias/Apelido à função
            validacao::validarString as validacaoSimples;
        }
    }

    //Instanciando

    $usuario = new Usuario();
    var_dump($usuario->validarString(' '));
    echo '<br>';
    var_dump($usuario->validacaoSimples(' '));