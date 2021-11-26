<div class="titulo">Array Multidimensional</div>

<?php
    $dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"

    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "Naturalidade"  => "Bahia"
    ]
];

print_r($dados);
echo '<br>'. $dados[0]['idade'];
echo '<br>'  . $dados[1]['idade'];

$dados[] = [
    "nome" => "Rosa",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]['Vizinho'] = "Chaves";
echo '<br>';
print_r($dados[2]);

//removendo um item do array sem reordenar o array
unset($dados[1]);
echo '<br>';
print_r($dados[1]);

