<?php

$nome = "Stephany Silva Ribeiro";
$idade = 23;
$cidade = "Bento Gonçalves";
echo "Seja bem vindo $nome à sua cidade $cidade, a qual recebe você de braços abertos!";

echo "<br>";

if ($idade >= 18){
    echo "A $nome é maior de idade!";
}else{
    echo "A $nome é menor de idade!";
}
echo "<br>";
echo "Super calculadora avançada da NASA 4.0";
echo "<br>";

$valorA = 99;
$valorB = 3;
$operacao = "dividir";
$resultado = "";

if ($operacao == "somar" || $operacao == "mais"){
    $resultado = $valorA + $valorB;
}elseif ($operacao == "subtrair" || $operacao == "menos"){
    $resultado = $valorA - $valorB;
}elseif ($operacao == "multiplicar" || $operacao == "vezes"){
    $resultado = $valorA * $valorB;
}elseif ($operacao == "dividir" || $operacao == "divide"){
    $resultado = $valorA / $valorB;
}else{
    echo "Somente são aceitos os seguintes parametros: <br>
    somar <br>
    subtrair <br>
    multiplicar <br>
    dividir <br>";
}
if ($resultado != ""){
    echo "A operação escolhida foi $operacao com os valores $valorA e $valorB e o resultado obtido é $resultado.";
    echo "<br>";
}

//Testa se a pessoa pode fazer a carteira de motorista.
// Precisa ser maior de 18 anos e ter mais de R$ 1.000,00.
$idadePessoa = 18;
$dinheiroNaCarteira = 30;

if($idadePessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "Parabéns, você pode fazer a carteira de motorista!";
}elseif ($idadePessoa < 18 && $dinheiroNaCarteira >= 1000){
    echo "Você não pode fazer a carteira porque tem menos de 18 anos.";
}elseif ($idadePessoa >= 18 && $dinheiroNaCarteira < 1000){
    echo "Você não pode fazer a carteira porque não tem o dinheiro necessário.";
}elseif ($idadePessoa < 18 && $dinheiroNaCarteira < 1000){
    echo "Você não tem nem a idade nem o dinheiro para fazer a carteira.";
}


?>