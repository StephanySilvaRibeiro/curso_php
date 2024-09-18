<?php


/**
 * criar por meio de objeto as operacoes matematicas + - * /
 */

class Calculadora {

    // Propriedade || atributo
    public $resultado = 0;

    public function somar($valor, $valor2) {
        $this->resultado = $valor + $valor2;
    }

    public function diminuir($valor, $valor2) {
        $this->resultado = $valor - $valor2;
    }

    public function multiplicar($valor, $valor2) {
        $this->resultado = $valor * $valor2;
    }

    public function dividir($valor, $valor2) {
        $this->resultado = $valor / $valor2;
    }

    public function __toString()
    {
        return  $this->resultado;
    }
}

$calculadora = new Calculadora();

// $calculadora->somar(10, 10);
// echo $calculadora->resultado;

// echo "<br/>";

// // $calculadora->dividir(10, 10);
// // echo $calculadora->resultado;
// echo $calculadora->resultado;
// echo $calculadora;

//---------------------------------------------------------------------------------

/**
 * Criar uma classe/Objeto que representa um banco
 * esta classe devera ter as operaceos basicas, como:
 * Saque, Deposito, Extrato e Transferencia
 * 
 * Tambem devera, fazer as devidas validacoes para cada operacao.
 */

 


 class Banco {

    public $saldo = 100;
    public $erro = ""; 


    public function Saque($quantidade){

        if ($quantidade > $this->saldo || $quantidade <= 0){

            $this->erro = "Saldo Insuficiente";

         }else { 

            $this->saldo -= $quantidade;

         }

         return $this->retorno();

    }

    public function Deposito($quantidade){

        if ($quantidade <= 0 || $quantidade == ""){

            $this->erro = "Insira um valor valido";

        } else {

            $this->saldo += $quantidade;

        }

        return $this->retorno();
    }

    public function Extrato(){

        return  $this->saldo;
    }

    public function Transferencia($quantidade){

        if ($quantidade > $this->saldo || $quantidade <= 0){

             $this->erro = "Saldo Insuficiente ";

        }else{

            $this->saldo -= $quantidade;

        }

        return $this->retorno(); 

    }

    public function retorno(){

        if ($this->erro != ""){

            return $this->erro;
        }
        
        return "Operação Concluida";
    }

}

$banco = new Banco();
echo "<br>";
echo $banco->Saque(100);
echo "<br>";
echo $banco->Deposito(200);
echo "<br>";
echo $banco->Transferencia(300);