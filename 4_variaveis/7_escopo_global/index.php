<?php

    $teste = "asd";

    echo "$teste global 1 <br>";

    # Estruturas de controle não delimitam escopo!
    if (5 > 2) {
        $teste = "dsa";
        echo "$teste global 2 <br>";
    }

    echo "$teste global 3 <br>";

    function funcao() {
        $teste = "xxx"; # Essa é uma variável de escopo local!
        echo "$teste escopo local de funcao <br>";
    }

    funcao();

    function testandoEscopoGlobal() {
        
        global $teste; # Chamando variável do escopo global

        echo "$teste global 4 <br>";

        $teste = "ddd"; # Alterando a variável do escopo global
    }

    testandoEscopoGlobal();

    echo "$teste global 5 <br>";