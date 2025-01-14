<?php

require __DIR__ . "/src/funcoes.php";
//__DIR__ passa o caminho absoluto de uma pasta no php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

// $filme = [
//     "nome" => "Thor: Ragnarok",
//     "ano" => 2021,
//     "nota" => 7.8,
//     "genero" => "super-herói",
// ];

$filme = criaFilme(
    nome: "Thor: Ragnarok", 
    anoLancamento: 2021,
    nota: 7.8, 
    genero: "super-herói"
);


echo $filme["ano"];

exibeMensagemLancamento(1990);

// var_dump($notas);
// sort($notas); //ordena um array (o & signific que ele está pegando a variável por referencia)
// var_dump($notas);
// $menorNota = min($notas); //retorna o menor valor de um array
// echo $menorNota;

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos); //pegar a posição de uma string (passa a string, e o que você quer achar)

// extrair uma parte de uma string  
var_dump(substr($filme['nome'], 0, $posicaoDoisPontos)); //passando a string, o valor inicial de onde quero extrair e o valor final

// echo json_encode($filme); //transforma em json

// var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}')); //passa um json para objeto (se usar true como ultimo parametro vira array associativo)


$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson); //está criando um arquivo e colocando o conteudo do json nele