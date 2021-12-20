<div class="titulo">Polimorfismo</div>

<?php

    abstract class Comida {
        public $peso;
    }

    class Arroz extends Comida{
        
    }

    class ArrozAgrega extends Arroz{
        
    }

    class Feijao extends Comida{

    }

    class Sorvete extends Comida{

    }
    
    class Pessoa {
        public $peso;

        function __construct($peso){
            $this->peso = $peso;
            
        }

        //Restringindo qualquer outra comida além de arroz
        // public function comer(Arroz $comida){
        //     $this->peso += $comida->peso;
        // }

        public function comer(Comida $comida){
            $this->peso += $comida->peso;
        }
    }

    $comida1 = new Arroz ();
    $comida1-> peso = 0.45;

    $comida2 = new ArrozAgrega ();
    $comida2-> peso = 0.45;

    $p = new pessoa(83.45);
    $p->comer($comida1);

    echo $p->peso;