<?php
//6.Crie uma função em linguagem PHP que receba 2 números e retorne o menor valor.
echo"Digite 2 valores para saber qual é o menor\n";
$num1=0;
$num2=0;
function menorValor($num1,$num2)
{
    echo"\n Digite o primeiro valor : ";
    $num1 = fgets(STDIN);
    echo"\n Digite o segundo valor :  ";
    $num2 = fgets(STDIN);
    
    
    
    $resultado= array ("$num1","$num2");
    print_r($resultado);
    echo min($resultado);
}
maiorValor($num1,$num2);