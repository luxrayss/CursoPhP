<div class="titulo">Interface</div>

<?php

    //os métodos das interfaces são por padrão públicas e não podem ser alteradas
    interface Animal {
        function respirar();

    }

    interface Mamifero {
        function mamar();

    }

    interface Canino extends Animal, Mamifero{
        function latir(): string;
    }

    class Cachorro implements Canino {
        function respirar(){
            echo "Irei usar oxigênio!";
        }

        function latir(): string{
            return 'Au Au';
            
        }

        function mamar(){
            return "Irei usar leite!";

        }

    }

    $animal1 = new Cachorro();
    echo $animal1->respirar(), '<br>';
    echo $animal1->latir(), '<br>';
    echo $animal1->mamar(), '<br>';

    echo '<br>';
    var_dump($animal1);
    echo '<br>';
    var_dump($animal1 instanceof Cachorro);