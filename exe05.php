<?php
//5.Crie uma função em linguagem PHP que receba 2 números e retorne o maior valor.
echo"Digite 2 valores para saber qual é o maior\n";
$num1=0;
$num2=0;
function maiorValor($num1,$num2)
{
echo"\n Digite o primeiro valor : ";
    $num1 = fgets(STDIN);
    echo"\n Digite o segundo valor :  ";
    $num2 = fgets(STDIN);
    

    
        $resultado= array ("$num1","$num2");   
        print_r($resultado);
        echo max($resultado);
}
maiorValor($num1,$num2);