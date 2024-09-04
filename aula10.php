<?php

// Criar duas funções separadas onde cada uma recebe um parametro (string, texto) e retorna um valor boolean (true || false, 0 || 1)
// Objetivo: Validar um CPF, CNPJ

// Sugestão / dica paara o nome da função: isValidCPF, isValidCNPJ
// Calcular CPF valido. Pesquisar

function isValidCPF($cpf) {
    $padrao = "/[^0-9]/is";
    $cpf = preg_replace($padrao, "", $cpf);

    // codigo aqui

    return true;
}

/**
 * CPF: ###.###.###-## = 14
 * CPF: 12345678910 = 11
 * CPF: 123.456.789-10 = 14
 */
function addMaskCPF($cpf) {
    $cpfMascarado = "";
    $maskCPF = "###.###.###-##"; // "491.582."

    $a =0;
    
    for ($i=0; $i <= strlen($maskCPF); $i++) {

        if ($maskCPF[$i] == '#') {
            $cpfMascarado .=  $cpf[$a];
            $a++;
        } else {
            $cpfMascarado .= $maskCPF[$i];
        }

    }

    return $cpfMascarado;
}

$maskCPF = "###.###.###-##";
$maskCNPJ = "##.###.###/####-##";

addMask("12345678910", $maskCNPJ);

function addMask($CpfCnpj, $mascara) {

    $a =0;
    $cpfMascarado = "";
    
    for ($i=0; $i <= strlen($mascara); $i++) {

        if ($mascara[$i] == '#') {
            $cpfMascarado .=  $CpfCnpj[$a];
            $a++;
        } else {
            $cpfMascarado .= $mascara[$i];
        }

    }

    return $cpfMascarado;
}


function isValidCNPJ($cnpj) {
    $padrao = "/^[0-9]*$/";
    $cnpj = preg_replace($padrao, "", $cnpj);

    // codigo aqui

    return true;
}

$cpf = "491.582.630-98aaa";


$cpfValido = isValidCPF($cpf);

$padrao = "/[^0-9]/is";
$cpf = preg_replace($padrao, "", $cpf); // 49158263098 => 491.582.630-98






if ($cpfValido) {
    echo "O CPF: $cpf é Valido."; // O CPF: 491.582.630-98aaa é válido.
} else {
    echo "O CPF: $cpf é Invalido.";
}