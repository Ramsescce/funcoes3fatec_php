<?php
//7.Crie uma função em linguagem PHP que receba 3 números e retorne o maior valor, use a função da questão 4.
echo"Digite 3 numeros";
$numA=0;
$numB=0;
$numC=0;
function programa($numA,$numB,$numC){
    echo"\nDigite o valor de A:\n";
    $numA = (float)fgets(STDIN);
    
    echo"\nDigite o valor de B:\n";
    $numB =(float) fgets(STDIN);
    
    echo"\nDigite o valor de C:\n";
    $numC = (float)fgets(STDIN);

    $resultado= array ("$numA","$numB","$numC");
    print_r($resultado);
    echo max($resultado);
}
programa($numA,$numB,$numC);


