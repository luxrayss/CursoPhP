<div class="titulos">Operadores Lógicos</div>

<?php
    //literais
    echo '<p> V ou F</p>';
    var_dump(true);
    echo '<br>';
    //Invertendo a polaridade com !
    var_dump(!true);

    echo "<p class='divisao'> Tabela Verdade 'AND' (E)</p><hr>";
    var_dump(true && false);
    var_dump(false && true);
    var_dump(true && true);
    var_dump(false && false);

    echo "<p class='divisao'> Tabela Verdade 'OR' (OU)</p><hr>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);
    
    echo "<p class='divisao'> Tabela Verdade 'XOR' (OU EXCLUSIVO)</p><hr>";
    var_dump(true XOR true);
    var_dump(true XOR false);
    var_dump(false XOR true);
    var_dump(false XOR false);

    echo "<p class='divisao'>Exemplo</p><hr>";
    $idade = 62;
    $sexo = 'F';

    If($idade >= 60 && $sexo === 'F'){
        echo "Pode aposentar -> $Sexo";

    }else if($idade >= 65 && $sexo === 'M'){
        echo "Pode aposentar -> $Sexo";
    }else {
        echo 'Vai ter que trabalhar mais um pouco...';
    }
    ?>

    <style>
        p {
            margin-bottom: 0px;
            font-weight: bold;
        }
        hr{
            margin-top: 0px;
        }
    </style>