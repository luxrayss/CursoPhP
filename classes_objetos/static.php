<div class="Titulo">Membors Estáticos</div>

<?php

    //Variáveis estáticas são variáveis que pertencem à classe e mantem o mesmo valor
    class A{
        public $naoStatic = 'Variável de instância';
        public static $static = 'Variável de classe (estática)';

        public function mostrarA(){
            echo "Não estática = {$this->naoStatic}<br>";
            //Tentativa 1
            // echo "Estática = {self::static}<br>";
            //Tentativa 2 - acessando a variável estática
            echo "Estática =" . self::$static . "<br>";

        }
        
        //criando uma função estática para exibir a função estática
        public static function mostrarStaticA(){
            // echo "Não estática = {this->naoStatic}<br>";
            echo "Estática =" . self::$static . "<br>";

        }
    }


    //exibindo a static 
    echo a::$static, '<br>'; //acessar diretamente pela classe
    A::mostrarStaticA(); //acessar diretamente pela classe

    A::$static = 'Alterado membro de classe!';
    echo A::$static, '<br>';
    
    

