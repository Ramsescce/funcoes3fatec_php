<?php

/*11.Crie um aplicativo (utilize formulário) de conversão entre as temperaturas Celsius e Farenheit.
Primeiro o usuário deve escolher se vai entrar com a temperatura em Célsius ou Farenheit, depois a 
conversão escolhida é realizada através de um comando SWITCH. Se C é a temperatura em Célsius e F em
farenheit, as fórmulas de conversão são:
C= 5.(F-32)/9
F= (9.C/5) + 32
*/

$varChange = $_POST['select'];
$varTemp = $_POST['recTemp']; 
switch($varChange){
case 1:
echo "Temperatura em Farenheit: ".(($varTemp * (9 / 5)) + 32);
break;
case 2:
echo "Temperatura em Celsius: ".($varTemp - 32) * 5 / 9;
break;
}


 ?>