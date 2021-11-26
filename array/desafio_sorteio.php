<div class="titulo">Desafio Sorteio</div>

<?php

    $nomes = ["Nome1", "Nome2", "Nome3", "Nome4"];      

    $sorteio = array_rand($nomes, 1);
    echo "<div center><h1><center>$nomes[$sorteio]</h1></div>";

?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>