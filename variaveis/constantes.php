<div class="titulo">Constantes</div>

<?php
    //definindo uma constante
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS;

    //const também define uma constante
    const NOVA_TAXA = 2.5;
    echo '<br>' . NOVA_TAXA;

    $valorVariavel = 2.8;
    //Atribuição de uma constante por variável
    //define ('NOVISSIMA_TAXA', $valorVariavel);
    // echo '<br>' . NOVISSIMA_TAXA;
    //Atribuição de uma constante por operação aritmética
    const NOVISSIMA_TAXA = 2.8 + 1.2;
    echo '<br>' . NOVISSIMA_TAXA;

    


