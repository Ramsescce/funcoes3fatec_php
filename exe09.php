<?php
//9.Crie uma função em linguagem PHP chamado Dado() que retorna, através de sorteio, um número de 1 até 6.
$arrayDado=0;
function Dado(){
    $arrayDado=  [1,2,3,4,5,6];
    $resArray = array_rand ($arrayDado);
    $res=$arrayDado[$resArray];
    echo "O valor do Dado é:$res";
}
Dado();