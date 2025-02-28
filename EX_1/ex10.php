<?php 
/**Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio 
da seguinte fórmula: volume = comprimento x largura x altura */
//usando php puro

echo "mostre o vlume da caixa <br>";
$comprimento = 2;
$largura = 10;
$altura = 2;
$volume = $comprimento*$largura*$altura;

echo "O VOLUME DA CAIXA É $volume <br>";

// usando função

function calcular_volume($com , $lar , $alt): float {
 return $com*$lar*$alt;
}

$vol = calcular_volume( 15,2,4);
echo "o volume é $vol <br> ";