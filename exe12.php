<?php

/*12.Uma professora, muito legal, fez 3 provas durante um semestre mas 
só vai levar em conta as duas notas mais altas para calcular a média. 
Faça uma aplicação em PHP (utilize formulário) que peça o valor das 3 notas, 
mostre como seria a média com essas 3 provas, a média com as 2 notas mais altas, 
bem como sua nota mais alta e sua nota mais baixa.*/

$schoolTest1 = $_POST['test1'];
$schoolTest2 = $_POST['test2']; 
$schoolTest3 = $_POST['test3'];  
echo "<strong>A primeira nota:</strong> $schoolTest1</br>";
echo "<strong>A segunda  nota:</strong> $schoolTest2</br>";
echo "<strong>A terceira nota:</strong> $schoolTest3</br>";  

function generalMedia($schoolTest1, $schoolTest2, $schoolTest3){
    $media = ($schoolTest1+$schoolTest2+$schoolTest3)/3;
    return $media;
}

function highestMedia($schoolTest1, $schoolTest2, $schoolTest3){
   if ($schoolTest1 >= $schoolTest2)
   {
   if ($schoolTest2 >= $schoolTest3)
   {
      $result = ($schoolTest1 + $schoolTest2)/2;
        return $result;
    }
    else
    {
      $result = ($schoolTest1 + $schoolTest3)/2;
        return $result;
    }
    }
    else 
    {        
    if ($schoolTest3 >= $schoolTest1)
    {
      $result = ($schoolTest2 + $schoolTest3) /2;
        return $result;
    }        
    }        
    }    
    
    function highestGrade($schoolTest1, $schoolTest2, $schoolTest3){
        if ($schoolTest1 >= $schoolTest2 && $schoolTest1 >= $schoolTest3) 
            return $schoolTest1;
        elseif ( $schoolTest2 >= $schoolTest1 && $schoolTest2 >= $schoolTest3) 
            return $schoolTest2;
        elseif ( $schoolTest3 >= $schoolTest1 && $schoolTest3 >= $schoolTest2) 
            return $schoolTest3;
    }

    function lowestGrade($schoolTest1, $schoolTest2, $schoolTest3){
        if ($schoolTest1 <= $schoolTest2 && $schoolTest1 <= $schoolTest3) 
            return $schoolTest1;
        elseif ( $schoolTest2 <= $schoolTest1 && $schoolTest2 <= $schoolTest3) 
            return $schoolTest2;
        elseif ( $schoolTest3 <= $schoolTest1 && $schoolTest3 <= $schoolTest2) 
            return $schoolTest3;
}    

    echo "<br><strong>A média das três notas: </strong> ".generalMedia($schoolTest1, $schoolTest2, $schoolTest3)."</br>";
   
    echo "<strong>A média das duas maiores notas: </strong> ".highestMedia($schoolTest1, $schoolTest2, $schoolTest3)."<br>";

    echo"<strong>A maior nota: <strong>".highestGrade($schoolTest1,$schoolTest2,$schoolTest3)."<br>";

    echo"<strong>A menor nota: <strong>".lowestGrade($schoolTest1,$schoolTest2,$schoolTest3);       

?>