<?php

// Utilizar o laço de repetição FOR para criar a tabuada do número informado pelo usuário.
// Exemplo: Usuário informou o número 4, fazer a tabuada do 4.

$numero = 5;

echo "TABUADA";
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 10; $i++){

    $resultado = $numero * $i;
    echo "$numero X $i = " . $resultado . "<br>";

}


?>
