<?php

$saldo = 1000;
$titularConta = 'JP';

echo "************** \n";
echo "titular: $titularConta \n";
echo "Saldo atual: R$ $saldo \n";
echo "************** \n";


do {
echo "1. Consultar saldo atual \n";
echo "2. Sacar Valor \n";
echo "3. Depositar Valor \n";
echo "4. sair \n";

$opcao = (int) fgets(STDIN); //pegar dados digitados no terminal

switch ($opcao) {
    case 1:
        echo "************** \n";
        echo "titular: $titularConta \n";
        echo "Saldo atual: R$ $saldo \n";
        echo "************** \n";
        break;
    case 2:
        echo "Qual valor deseja sacar? \n";
        $valorASacar = (float) fgets(STDIN);
        if ($valorASacar > $saldo) {
            echo "Saldo insuficiente";
        }else{
            $saldo -= $valorASacar;
        }
        break;
    case 3:
        echo "Qual valor deseja depositar? \n";
        $valorADepositar = (float) fgets(STDIN);
        $saldo+= $valorADepositar;
        break;
    case 4:
        echo "Adeus \n";
        break;
    
    default:
        echo "Opção inválida \n";
        break;
}
} while ($opcao != 4);