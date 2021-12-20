<div class="titulo">Visibilidade</div>

<?php

    class A {
        public $publico = 'Público';
        protected $protegido = 'Protegido';
        private $privado = 'Privado';
    

    public function mostrarA(){
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
        echo '<br>';
        }

    protected function vaiHerenca(){
        echo 'Serei transmitido por herença!<br>';
    }

    private function naoMostrar(){
        echo 'Não vou imprimir!!!';
        }
    }


    //acessando as variáveis protegidas
    $a = new A();
    $a->mostrarA();    
    echo "Fim";

    class B extends A{
        public function mostrarB(){
            echo "Class B) Publico = {$this->publico} <br>";
            echo "Class B) Protegido = {$this->protegido} <br>";
            //Privado não será exibido pois só é exibido na própria classe em que foi criado
            echo "Class B) Privado = {$this->privado} <br>";
            echo '<br>';

            parent::vaiHerenca();
        }
        
    }

    //exibindo-
    echo '<br>';
    $b = new B();
    $b->mostrarB();
    $b->mostrarA();
