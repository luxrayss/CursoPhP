<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';

echo "$a {$$a} ${$a}";

echo '<br>';
$epa = 'opa';
$opa =  'vish';
echo "$epa {$$epa}";
