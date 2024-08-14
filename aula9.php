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

//------------------------------------------------------------------------------

// UTILIZAR FUNÇÕES:
// Crie um sistema bancario contendo as seguintes operações:
// Deposito, Saque, Extrato (saldo).

function Banco($valor, $operacao, $saldoAtual){

    $valor = 0;
    $saldo = $saldoAtual;

    if ($operacao == "Deposito"){

        $valor += $valor;

        return $valor;
    }

    if ($operacao == "Saque"){

        $valor -= $valor;

        return $valor;
    }

    if ($operacao == "Extrato"){

        return $valor;
    }
}

$saldoAtual = 50;
$valor = 100;
$operacao = "Deposito";

$saldoAtual = Banco($valor1, $operacao, $saldoAtual);
echo "Extrato: $valor $operacao = $saldoAtual <br>";

$operacao = "saque";
$saldoAtual = Banco($valor1, $operacao, $saldoAtual);
echo "Extrato: $valor $operacao = $saldoAtual <br>";


