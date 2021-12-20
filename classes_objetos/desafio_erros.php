<div class="titulo">Desafio Erros</div>

<?php

    //Interface
    interface Template{
        function metodo1();
        public function metodo2 ($parametro);
    }

    //uma classe abstrata só pode IMPLEMENTAR uma INTERFACE, não ESTENDER
    abstract class ClasseAbstrata implements Template{
        public function metodo3(){
            echo "Estou funcionando";
        }

        public function metodo1(){

        }
    }

    //Classe NÃO IMPLEMENTA CLASSES, elas EXTENDEM
    class Classe extends ClasseAbstrata {
        function __construct($parametro){
            
            
        }        

        public function metodo2($parametro){

        }
    }

    $exemplo = new Classe('...');
    $exemplo->metodo3();