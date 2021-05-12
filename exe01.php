<?php
//Crie uma função que receba um valor e informe se ele é positivo ou não.
Echo "Digite um valor e saiba se ele é positivo: ";
function positivo($numero)
 {
    $numero=fgets(STDIN);
    if($numero>0)
 {
    echo "\nÉ positivo\n";        
 }
    elseif ($numero == 0)
 {
    echo "\nÉ neutro";
    exit;
 }
    else 
 {
    echo "\nnegativo\n";
 }
}
positivo (0);