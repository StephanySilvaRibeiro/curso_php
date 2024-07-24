<?php

echo "SOMA DOS NÚMEROS";
echo "<br>";
echo "<br>";

// Declarando as variáveis que serão usadas para fazer a soma dos números.
$somaPares = 0;
$somaImpares = 0;

for($i = 1; $i <= 100; $i++){

    // Armazena na variavel $imparoupar o resultado da sobra da divisãopor 2.
    $imparoupar = $i % 2;

    if($imparoupar == 0){

        //echo "O número $i é PAR <br>";
        //$somaPares = $somaPares + $i;
        $somaPares += $i;

    } else {

        //echo "O número $i é IMPAR <br>";
         //$somaImpares = $somaImpares + $i;
        $somaImpares += $i;

    }
}

echo "A soma dos PARES é de: $somaPares <br>";
echo "A soma dos IMPARES é de: $somaImpares <br>";
echo "<br>";
echo "---------------------------------------------------";
echo "<br>";

// ----------------------------------------------------------------------------------

// A ideia da tabuada é ela fazer do 0 até 10 e mostrar o resultado necessário que ela seja dinâmica e consiga multiplicar do 0 a 10.

echo "<br>";
echo "TABUADA";
echo "<br>";

for ($f = 0; $f <= 15; $f++){

    echo "<br>";

    //Inicia o laço interno para multiplicar a tabuada por 0-10.
    for($g = 0; $g <= 10; $g++){

        echo "Numero: $f X $g = " .$f * $g. "<br>";

    }

}

?>