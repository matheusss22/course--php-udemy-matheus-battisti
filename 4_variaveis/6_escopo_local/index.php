<?php

    $x = 10; # x no escopo Global

    echo "$x global <br>";

    function teste1() {
        $x = 15; # x no escopo local da teste1()
        echo "$x local 1 <br>";
    }

    function teste2() {
        $x = 20; # x no escopo local da teste2()
        echo "$x local 2 <br>";
    }

    function teste3() {
        $x = 25; # x no escopo local da teste3()
        echo "$x local 3 <br>";
    }

    teste1();
    teste2();
    teste3();

    echo "$x global <br>";