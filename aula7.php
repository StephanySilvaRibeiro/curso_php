<?php

/*
$vetor = array(); // Vetor vazio
//$vetor = [5, 2, 3, 4, 1];
// $i =     0, 1, 2, 3, 4


$tamanho = count($vetor);
echo $vetor[5] . "<br>"; 

for($i = 0; $i < $tamanho; $i++){
    echo $vetor[$i] . "<br>";

    if ($i % 2 == 0) {

        $somaPares += $i;

    } else {

        $somaImpares = $somaImpares + $i;

    }
}

*/

// --------------------------------------------------------------------------------------------------


$vetor = array();
$vetorPar = [];
$vetorImpar = [];


for($i = 1; $i <= 100; $i++){
    
    if ($i % 2 == 0) {

        $somaPares += $i;
        // $vetorPar = array_push($vetorPar, $i);
        $vetorPar[] = $i;

    } else {

        $somaImpares += $i;
        // $vetorImpar = array_push($vetorImpar, $i);
        $vetorImpar[] = $i;
    }
}


$tamanhoPar = count($vetorPar);
$tamanhoImpar = count($vetorImpar);


// Colocar os números em ordem decrescente
// Usar variaveis

echo "NÚMEROS PARES AO CONTRÁRIO: <br>";

for($i = 100; $i >= 0; $i--){

    if ($i % 2 == 0) {

        $vetorPar[] = $i;
        echo $i . "- ";

}

}

echo "<br>";
echo "<br>";

echo "NÚMEROS IMPARES AO CONTRÁRIO: <br>";

for($i = 100; $i >= 0; $i-- ){

    if ($i % 2 != 0) {

    $vetorImpar[] = $i;
    echo $i . "- ";

}

}

echo "<br>";
echo "<br>";

echo "NÚMEROS PARES: <br>";

// for($i = 0; $i < count($vetorPar); $i++)
for($i = 0; $i < $tamanhoPar; $i++){

    echo $vetorPar[$i] . "- ";

}

echo "<br>";
echo "<br>";
echo "NÚMEROS IMPARES: <br>";

// for($i = 0; $i < count($vetorImpar); $i++)
for($i = 0; $i < $tamanhoImpar; $i++){

    echo $vetorImpar[$i] . "- ";
}
