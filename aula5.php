<?php

// Recriar exercicio da tabuada (Aula 04) com os laços WHILE e DO-WHILE.

/*
$numero = 5;
$i = 0;

echo "TABUADA";
echo "<br>";
echo "<br>";

while($i <= 10){

    $resultado = $numero * $i;
    echo "$numero X $i = " . $resultado . "<br>";
    $i++;

}
*/



// Calcular / Iterar os números pares de 2 até 20 utilizando os laços WHILE e FOR.


/*
echo "NÚMEROS PARES";
echo "<br>";
echo "<br>";


for ($i = 2; $i <= 20; $i = $i+2){

    echo "$i"; 
    echo "<br>";
    
}
*/



/*
$i = 2;

while($i <= 20){

    echo "$i";
    $i = $i+2;
    echo "<br>";

}
*/



// Somar todos os números de 0 à 100 utilizando o laço de repetição WHILE, depois mostre o resultado da soma.

/*
echo "SOMA DOS NÚMEROS";
echo "<br>";
echo "<br>";

$soma = 0;
$i = 1;

while($i <= 100){

    $soma = $soma + $i;
    // $soma += $i;
    $i++;

}

echo "A soma dos números é: " . $soma . "<br>"; // 5050
*/



// Somar todos os números PARES e IMPARES de 0 à 100 utilizando o laço de repetição WHILE, depois mostre o resultado da soma.


echo "SOMA DOS NÚMEROS";
echo "<br>";
echo "<br>";

$somaPares = 0;
$somaImpares = 0;
$i = 0;


while ($i <= 100) {

    if ($i % 2 == 0) {

        $somaPares = $somaPares + $i;

    } else {

        $somaImpares = $somaImpares + $i;

    }

    $i++;

}

echo "Soma dos números pares de 0 a 100: $somaPares";
echo "<br>";
echo "Soma dos números ímpares de 0 a 100: $somaImpares";