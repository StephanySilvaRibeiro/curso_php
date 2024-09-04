<?php

class FormatarDados {

    // Propriedades || atributos

    public $texto;
    public $mascara;

    public function __construct($texto, $mascara)
    {
        $padrao = "/[^0-9]/is";
        $this->texto = preg_replace($padrao, "", $texto);
        $this->mascara = $mascara;
    }

    public function addMask($texto = "", $mascara = "") {
        
        // (1 == 1) ? true : false;

        // if (1 == 1) {
        //     true;
        // } else {
        //     false;
        // }

        $texto = $texto ? $texto : $this->texto;
        $mascara = $mascara ? $mascara : $this->mascara;

        $a = 0;

        $valorMascarado = "";
        
        for ($i=0; $i <= strlen($mascara); $i++) {
    
            if ($mascara[$i] == '#') {
                $valorMascarado .=  $texto[$a];
                $a++;
            } else {
                $valorMascarado .= $mascara[$i];
            }
    
        }
    
        return $valorMascarado;
    }

    public function isValidCel() {

        $padrao = "/[^0-9]/is";
        $texto = preg_replace($padrao, "", $this->texto);
    
        $tamanho = strlen($texto);
    
        if ($tamanho != 13) {
            return false;
        }
    
        $pais = substr($texto, 0, 2); // 55 - 5554999912933
        $ddd = substr($texto, 2, 2); // 54 - 5554999912933
    
        if ($pais != 55) {
            return false;
        }
    
        // $listDDD = array(11, 12, 13, 14, 54);
        $listDDD = [11, 12, 13, 14, 54];
    
        $dddValido = in_array($ddd, $listDDD); // TRUE || FALSE
    
        return $dddValido;

}

    public function isValidCPF() {

        $padrao = "/[^0-9]/is";
        $texto = preg_replace($padrao, "", $this->texto);

        return true;
}

    public function isValidCNPJ() {

        $padrao = "/^[0-9]*$/";
        $texto = preg_replace($padrao, "", $this->texto);

        return true;
}

}

$texto = "5500996797757";
$mascara = "+## (##) # ####-####";

// ###.###.###-## CPF
// ##.###.###/####-## CNPJ
// +## (##) # ####-#### CELULAR

$formatarDados = new FormatarDados($texto, $mascara); // instanciar o objeto
echo $formatarDados->addMask();