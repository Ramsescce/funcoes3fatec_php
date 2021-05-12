<?php

/*13. Faça uma rotina recursiva para calcular a somatória de todos os número de 1 a N (N será lido do teclado).
Observação: se N é igual a 5 por exemplo, A somatória dos números será igual a 15, ou seja,
1+2+3+4+5 = 15.*/

$numbers = $_POST['number'];

function recursiva($numbers)
{
if($numbers == 1)
    return $numbers;
else
    return ( $numbers + recursiva($numbers-1) );
}    

    echo"<b>A somatoria de todos os numeros de 1 a ". $numbers." é: </b>".recursiva($numbers);

?>