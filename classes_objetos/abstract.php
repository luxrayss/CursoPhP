<div class="titulo">Classe Abstrata</div>

<?php
    //classe abstrata não pode ser instanciada
    abstract class Abstrata{
        public abstract function metodo1();
        abstract protected function metodo2($parametro);

    }

    abstract class FilhaAbstrata extends Abstrata{
        public function metodo1(){        
            echo "Executando metodo 1 <br>";

        }

        abstract public function metodo3();
    }

    class Concreta extends FilhaAbstrata{
        public function metodo1()
        {
            echo "Executando método 1 extendido <br>";
            parent::metodo1();

        }

        //pode ser alterado para público, mas não private
        protected function metodo2($parametro){        
            echo "Executando método 2 com parametro $parametro<br>";

        }

        public function metodo3(){
            echo "Executando método 3<br>";
            $this->metodo2('Interno');       
        }
        
    }

    $c = new Concreta();
    $c-> metodo1();
    $c-> metodo3();


    echo "Fim!";