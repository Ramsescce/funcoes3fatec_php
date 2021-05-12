<?php

/*16.Faça uma rotina recursiva para o problema da Torre de Hanói.
O problema da Torre de Hanói consiste de três pinos, A, B e C, denominados :
origem, destino e trabalho, respectivamente, e n discos de diâmetros diferentes.
Inicialmente, todos os discos se encontram empilhados no pino origem, em ordem
decrescente de tamanho, de baixo para cima. O objetivo é empilhar todos os
discos no pino destino, atendendo às seguintes restrições
Apenas um disco pode ser removido de cada vez.
Qualquer disco não pode ser jamais colocado sobre outro de tamanho menor.*/

$n = $_POST['discos'];

function hanoiTower($n, $orig, $trab, $dest){    
    
        if($n==1)
        echo "1 <span style='color:red;'>para torre</span> $trab</br>";

        else{
        hanoiTower($n-1, $orig, $dest, $trab);

        echo $n." <span style='color:red;'>para torre</span> $trab</br>";

        hanoiTower($n-1, $dest, $trab, $orig);
        }
       }       
        echo "<b>A seguencia a seguir é: </b></br>";
        echo "</br>";
        
        hanoiTower($n, 'A', 'B', 'C');
        
    
    
?>