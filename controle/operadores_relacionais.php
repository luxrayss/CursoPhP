<div class="titulo">Operadores Relacionais</div>

<?php

    // var_dump (1 == 1);
    // var_dump (1 > 1);
    // var_dump (1 >= 7);
    // var_dump (1 < 23);
    // var_dump (1 <= 5);
    // var_dump (1 != 4);
    // var_dump (1 <> 8);

    //compadando estritamente

    var_dump(1 == '1'); //é igual mesmo sendo string;
    var_dump(111 === '111'); //não é igual por serem de tipos diferentes
    var_dump(111 != '111'); //é igual mesmo sendo string;
    var_dump(111 !== '111'); //não é igual por serem de tipos diferentes

    echo "<p>Relacionais no If/Else</p><hr>";
    $idade = 15;
    if($idade < 18){
        echo "Menor de idade <br>";
        
    }else if ($idade < 65){
        echo "Adulto<br>";

    }else {
        echo "Terceira idade<br>";

    }

    //Spaceship serve para comparar numeros para ver se um é maior que outro, retornando 0, 1 ou -1
    echo '<p>Spaceship</p><hr>';
    var_dump(5 <=> 3);

    echo '<p>Valores podem ser V ou F</p><hr>';
    var_dump(!!5);
    var_dump(!!0);
?>

<style>
    p {
        margin-bottom:0px;
    }

    hr {
        margin-top: 0px;
    }
</style>