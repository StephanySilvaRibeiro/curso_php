<?php

/*
function imprimir(){

}
*/

// Criar uma calculadora usando funções, recebendo dois números como parametro.
// OPERAÇÕES: + - * / %
// Retornar o valor para o usuário, salvar em uma outra variavel e exibir este valor.

function Calculadora($numero1, $operacao, $numero2){

    $resultado = 0;

    if($operacao == '+'){

        $resultado = $numero1 + $numero2;

    }

    if($operacao == '-'){

        $resultado = $numero1 - $numero2;

    }

    if($operacao == '*'){

        $resultado = $numero1 * $numero2;

    }

    if($operacao == '/'){

        $resultado = $numero1 / $numero2;

    }

    if($operacao == '%'){

        $resultado = $numero1 * $numero2;
        $resultado = $resultado / 100;

    }

    return $resultado;

}

$numero1 = 100;
$operacao = "%";
$numero2 = 10;

$resultado = Calculadora($numero1, $operacao, $numero2);

echo "O resultado de : $numero1 $operacao $numero2 = $resultado";
echo "<br>";
echo "<br>";
echo "------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";

//------------------------------------------------------------------------------

// UTILIZAR FUNÇÕES:
// Crie um sistema bancario contendo as seguintes operações:
// Deposito, Saque, Extrato (saldo).

echo "SISTEMA BANCÁRIO";
echo "<br>";
echo "<br>";

/*

function Banco($valor, $operacao, $saldoAtual){


    if ($operacao == "Deposito"){

        $saldoAtual = $saldoAtual + $valor;

        return $saldoAtual;
    }

    if ($operacao == "Saque"){

        $saldoAtual = $saldoAtual - $valor;

        return $saldoAtual;
    }

    if ($operacao == "Extrato"){

        return $saldoAtual;
        
    }
}

$saldoAtual=2000; // Saldo inicial
echo "SALDO INICIAL: $saldoAtual <br>";

$valor = 3000;
$operacao = "Deposito";

$saldoAtual = Banco($valor, $operacao, $saldoAtual);

echo "SEU SALDO ATUAL É: $saldoAtual <br> OPERAÇÃO REALIZADA: $operacao <br>";


echo "<br>";


$valor = 3000;
$operacao = "Saque";

$saldoAtual = Banco($valor, $operacao, $saldoAtual);

echo "SEU SALDO ATUAL É: $saldoAtual <br> OPERAÇÃO REALIZADA: $operacao <br>";

*/

//-----------------------------------------------------------------------------------------

// Não permitir DEPOSITO em branco ou 0.
// Não permitir que o SAQUE seja maior do que tem na conta.


function banco($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    if ($operacao == "Extrato") {
        return $saldo;
    }

    if ($operacao == "Saque" && $valor > $saldoAtual) {

        return "Você não tem dinheiro suficiente.";
    }

    if ($operacao == "Saque" && ($valor <=0 || $valor == "")) {

        return "O deposito esta em branco, verifique o valor informado.";
    }

    if ($operacao == "Saque") {
        // $saldo = $saldo - $valor;
        $saldo -= $valor;
    }

    if ($operacao == "Deposito" && ($valor <=0 || $valor == "")) {

        return "O deposito esta em branco, verifique o valor informado.";
    }

    if ($operacao == "Deposito") {
        // $saldo = $saldo + $valor;
        $saldo += $valor;
    }
    
    return $saldo;
}

$saldoAtual = 500; // Tem um valor inicial.
echo "VALOR INICIAL: $saldoAtual <br><br>";

$valor = 100;
$operacao = "Deposito";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor <br> EXTRATO: $saldoAtual<br><br>";

$valor = 700;
$operacao = "Saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor <br> EXTRATO: $saldoAtual<br><br>";

