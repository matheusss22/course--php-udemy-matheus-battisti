<?php

    $a = true;

    if(is_bool($a)) {
        echo "É um booleano!<br>";
    }

    if (is_bool(0)) {
        echo "É um booleano!<br>";
    }

    if (is_bool(false)) {
        echo "É um booleano!<br>";
    }

    if (0 == false) {
        echo "Zero é considerado falso!<br>";
    }

    if (0.0 == false) {
        echo "Zero é considerado falso!<br>";
    }