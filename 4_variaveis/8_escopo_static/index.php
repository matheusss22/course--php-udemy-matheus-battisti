<?php

    function func1() {
        static $var1 = 0; # Static mantém o valor da variável entre as chamadas de função!
        $var1++;
        echo "$var1 <br>";
    }

    func1();
    func1();
    func1();
