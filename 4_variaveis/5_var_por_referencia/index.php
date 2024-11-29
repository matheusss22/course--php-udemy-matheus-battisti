<?php

    $x = 10;

    $y =& $x;

    echo $x, "<br>"; # 10
    echo $y, "<br>"; # 10
    
    $x = 15; # Atribuindo em x, que possui a referência de y

    echo $x, "<br>"; # 15
    echo $y, "<br>"; # 15

    $nome1 = "Matheus";
    $nome2 =& $nome1;

    echo "$nome1 <br>"; # Matheus
    echo "$nome2 <br>"; # Matheus

    $nome2 = "João";

    echo "$nome1 <br>"; # João
    echo "$nome2 <br>"; # João
