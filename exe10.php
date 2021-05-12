<?php
//10.Use a função da questão passado e lance o dado 1 milhão de vezes.
// Conte quantas vezes cada número saiu. A probabilidade deu certo?
 //Ou seja, a porcentagem dos números foi parecida?

echo"Dado do milhão";
function Dado(){
    $cont1="";
    $cont2="";
    $cont3="";
    $cont4="";
    $cont5="";
    $cont6=""; 
    $arrayDado="";
    for ($i=0;$i<1000;$i++)
    {
    $arrayDado = [1,2,3,4,5,6];
    $resArray = array_rand ($arrayDado);
    $res=$arrayDado[$resArray];
    echo "\n";
    echo $res.",";
   
    if($res == 1)
    {
        $cont1++;
    }
    if($res == 2)
    {
        $cont2++;
    }
    if($res == 3)
    {
        $cont3++;
    }
    if($res == 4)
    {
        $cont4++;
    }
    if($res == 5)
    {
        $cont5++;
    }
    if($res == 6)
    {
        $cont6++;
    } 
    
    }
    $soma = (int) $cont1+$cont2+$cont3+$cont4+$cont5+$cont6;
    echo"\n";
    echo"\nO numero 1 saiu: ".$cont1." vezes, porcentagem:".($cont1*100)/$soma."%";
    echo"\nO numero 2 saiu: ".$cont2." vezes, porcentagem ".($cont2*100)/$soma."%";
    echo"\nO numero 3 saiu: ".$cont3." vezes, porcentagem ".($cont3*100)/$soma."%";
    echo"\nO numero 4 saiu: ".$cont4." vezes, porcentagem ".($cont4*100)/$soma."%";
    echo"\nO numero 5 saiu: ".$cont5." vezes, porcentagem ".($cont5*100)/$soma."%";
    echo"\nO numero 6 saiu: ".$cont6." vezes, porcentagem ".($cont6*100)/$soma."%";
    echo "\nO numero total de repetições é :".$soma;
}
Dado();