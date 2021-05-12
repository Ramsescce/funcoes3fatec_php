<?php
//Crie uma função que receba três valores, 'a', 'b' e 'c', que são os coeficientes de uma equação do segundo
//grau e retorne o valor do delta, que é dado por 'b² - 4ac’
Echo "Digite 3 valores para A,B,C para equação do 2grau: \n";

function valorDelta($delta) 
 {  
    echo "Digite o valor de A : ";
    $numA=(float)fgets(STDIN);
    echo "Digite o valor de B : ";
    $numB=(float)fgets(STDIN);
    echo "Digite o valor de C : ";
    $numC=(float)fgets(STDIN);
    
    $delta=(float)($numB*$numB)-4*($numA*$numC);
    Echo 'O valor de Delta é:'.$delta;
}
valorDelta($delta);