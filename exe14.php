<?php

/*14. Crie um programa em PHP que conte os dígitos de um determinado número usando recursão.
Observação: se o usuário inserir o número 250, a saída esperada deve ser : o número
digitado tem 3 dígitos.*/

$numbers = $_POST['number'];


function countDigits($numbers){
    $i = 1;
    if($numbers >= 10)
    {
        $numbers /= 10;
        $i += countDigits($numbers);
    }
        return $i;
}
echo"<b>O número digitado foi ". $numbers." e tem: </b>".countDigits($numbers)." dígitos."; 
?>
