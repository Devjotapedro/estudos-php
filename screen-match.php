<?php

echo "Bem-vindo(a) ao screen match!
";

$nomeFilme = 'Top Gun - Marverik';
// $nomeFilme = 'Thor: Ragnarok'; //sobrescrita de codigo
// $nomeFilme = 'Se beber não case';


$anoLancamento = 2022;
// $anoLancamento = $argv[1] ?? 2022; //armazena todos os valores (posso passar valores via terminal). ??(operador de colessencia nula) significa que se o que tiver a esquerda for nulo, ele mostrará o que está a direita

// $quantidadeDeNotas = $argc - 1;
// $notaFilme = $somaDeNotas / $quantidadeDeNotas;
// $somaDeNotas = 0;

// for ($contador=1; $contador < $argc; $contador++) { 
//     $somaDeNotas += $argv[$contador];
// }



$incluidoNoPlano = true;

// echo "nome do filme:" . $nomeFilme . "\n";
// echo "Nota do filme: $notaFilme \n";

// aspas simples ele não interpreta, só duplas

echo "Ano de lançamento: $anoLancamento \n";

if ($anoLancamento > 2022){
    echo "esse filme é um lançamento \n";
}elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme ainda é novo \n";
}else{
    echo "esse filme não é um lançamento \n";
}

// Match expression (especificidade do php)

$genero = match($nomeFilme) {
    "Top Gun - Marverik" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero";

var_dump($argv); //verificar o tipo da variavel

// $notasParaOFilme = [10,8, 9, 7.5, 5, 6.8];

// array associtivo
$filme = [
    "nome" => "Thor",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "Super-heroi",
];

echo $filme['nome'];

$notas = [];
// for ($contador=1; $contador < $argc; $contador++) { 
//     $notas[] = (float) $arg[$contador];
// }

// for ($i=0; $i < count($notas); $i++) { 
//     $somaDeNotas += $notas[$i];
// }

// var_dump($notas);

foreach ($motas as $nota) {
    $somaDeNotas += $nota;
}

// somar elementos de um array: array_sum($notas)