<div class="titulo">Arrays Constantes</div>

<?php

    const FRUTAS =['laranja', 'abacaxi'];
    echo FRUTAS[0];
    
    CONST CARROS = ['Fiat' => 'Uno', "Ford" => "Fiesta"];
    echo '<br>' . CARROS["FIAT"];

    define('CIDADES' , array ('Belo Horizonte', 'Recife'));
    echo '<br>' . CIDADES[1];