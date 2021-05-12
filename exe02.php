<?php
//2.Crie uma função que receba um valor e diga se é nulo ou não.
Echo "Digite um valor e saiba se ele é NULO: ";
$numero=fgets(STDIN);
function valorNulo ($numero) 
 {
    if ($numero==0)
 {
    Echo "\nO número digitado foi:". $numero." é NULO\n";
    exit;
 }
    else
 {
    Echo "\nO numero digitado foi:". $numero. " NÃO NULO\n";
 }
}
valorNulo($numero);