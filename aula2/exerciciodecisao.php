<?php
    $peso = 65;
    $altura = 1.65;
    $imc= $peso/($altura*$altura);
    //pow - e para potencia
    echo "peso:",$peso," kg";
    echo "<br>";
    echo "altura:",$altura," cm";
    echo "<br>";
    echo "IMC-",$imc;
    echo "<br><br>";
    //não precisa ter usado o "ou",mas funciona
    if($imc<=16.9){
        echo "Muito abaixo do peso";
    }elseif($imc>=17 && $imc<=18.4){
        echo "abaixo do peso";
    }elseif($imc>18.4 && $imc<=24.9){
        echo "peso normal";
    }elseif($imc>24.9 && $imc<=29.9){
    echo "acima do peso";
    }elseif($imc>29.9 && $imc<=34.9){
        echo "Obesidade grau I";
    }elseif($imc>34.9 && $imc<=40){
        echo "Obesidade grau II";
    }else{
        echo "Obesidade grau III";}
?>