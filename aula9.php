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

function Banco($valor, $operacao){

    $saldoAtual = 200;

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

$valor = 2000;
$operacao = "Extrato";


$saldoAtual = Banco($valor, $operacao);

echo "SEU SALDO ATUAL É: $saldoAtual <br> OPERAÇÃO REALIZADA: $operacao <br>";

