<?php

$nome = "Stephany";
$sobrenome = "Silva";

// Concatenação com as variaveis.
echo "Olá ".$nome." ".$sobrenome."!<br>";
echo "<br>";

// Strlen é usado pra contar caracteres.
echo "A quantidade de letras no seu nome é: ";
echo strlen($nome);
echo "<br>";

echo "A quantidade de letras no seu sobrenome é: ";
echo strlen($sobrenome);
echo "<br>";

echo "A quantidade de letras no seu nome e sobrenome são: ";
echo strlen($nome."".$sobrenome);
echo "<br>";

echo "<br>";

// Strtoupper serve para colocar em letras maiusculas.
echo strtoupper("texto caixa alta");
echo "<br>";

// Strtolower serve para colocar em letras minusculas.
echo strtolower("TEXTO CAIXA BAIXA");
echo "<br>";

// Strrev colocar a frase de traz pra frente.
echo strrev("anotaram a data da maratona | avon | amor");
echo "<br>";

echo "<br>";

echo "Tudo sobre a data atual: <br>";
echo date("d/m/Y");
echo "<br>";
echo date("H:i:s");
echo "<br>";
echo date("d/m/Y H:i:s A");
echo "<br>";

// 0 Domingo - 6 Sábado
echo date("w"); 
echo " - ";

$DiaSemana = date("w");

if($DiaSemana == 0){
    echo "Domingo";

}elseif($DiaSemana == 1){
    echo "Segunda";

}elseif($DiaSemana == 2){
    echo "Terça";

}elseif($DiaSemana == 3){
    echo "Quarta";
        
}elseif($DiaSemana == 4){
    echo "Quinta";

}elseif($DiaSemana == 5){
    echo "Sexta";

}elseif($DiaSemana == 6){
    echo "Sábado";
}

echo "<br>";

// É como se fosse um menu / fluxo.
switch ($DiaSemana){
    case 0:
        echo "Domingo";
        break;

    case 1:
        echo "Segunda";
        break;

    case 2:
        echo "Terça";
        break;

    case 3:
        echo "Quarta";
        break;

    case 4:
        echo "Quinta";
        break;

    case 5:
        echo "Sexta";
        break;

    case 6:
        echo "Sábado";
        break;

    default:
    // Se chegou aqui porque não 'casou' com nenhum valor.
    break;
}

?>