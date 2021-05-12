<?php
/*Usando as 3 funções acima, crie um aplicativo que calcula as raízes de uma equação do 2o grau:
ax² + bx + c=0. Para ela existir, o coeficiente 'a' deve ser diferente de zero.
Caso o delta seja maior ou igual a zero, as raízes serão reais. Caso o delta seja negativo
, as reais serão complexas e da forma: x + iy*/
$x1=0;
$x2=0;
echo"Calcule as raizes de uma equação do segundo 2o grau:\n";

function programa($x1,$x2){
    echo"\nDigite o valor de A:\n";
    $numA = (float)fgets(STDIN);
    
    echo"\nDigite o valor de B:\n";
    $numB =(float) fgets(STDIN);
    
    echo"\nDigite o valor de C:\n";
    $numC = (float)fgets(STDIN);
    
    if ($numA == 0)
    {
        echo"\n Tente outra vez com um numero diferente de 0.\n";
        exit;
    }
    $delta=(float)($numB*$numB)-4*($numA*$numC);
    
    if($delta >=0)
    {
        echo"\n O valor de delta é: ".$delta; 
        $x1 = (-$numB + sqrt($delta)) / 2 * $numA;
        $x2 = (-$numB - sqrt($delta)) / 2 * $numA;
        echo "\nRaizes reais : x1 = ".$x1."x2 = ".$x2;
    }
    else
    {
        $interacao=0;
            echo "\nO valor de delta negativo é: ".$delta;
          
            $x1 =(-$numB)/2*($numA + $interacao)*sqrt(-$delta)/2 * $numA;
            $x2 =(-$numB)/2*($numA - $interacao)*sqrt(-$delta)/2 * $numA;
            echo "\nRaizes complexas : x1 = ".$x1.", x2 = ".$x2;
            
    }
}
programa($x1,$x2);
   