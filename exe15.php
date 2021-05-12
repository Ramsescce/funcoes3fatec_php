<?php

/*15. Crie um programa que calcula o máximo divisor comum entre dois números usando a recursão.
Observação : Dois números naturais sempre têm divisores comuns. Assim, o máximo divisor
comum entre os dois é o maior de seus divisores.
Exemplificando...os divisores comuns de 12 e 18 são 1,2,3 e 6. Dentre eles, 6 é o maior.
Então, chamamos o 6 de máximo divisor comum de 12 e 18 e indicamos m.d.c.(12,18) = 6.*/


$numbers1 = $_POST['number1'];
$numbers2 = $_POST['number2'];

function maxDivCom($numbers1, $numbers2)
{
   if($numbers2 != 0)
       return maxDivCom($numbers2, $numbers1%$numbers2);
   else 
       return $numbers1;
}   
   echo "<b>O máximo Divisor Comum entre: ".$numbers1." e ".$numbers2." é:</b> ".maxDivCom($numbers1, $numbers2); 

?>