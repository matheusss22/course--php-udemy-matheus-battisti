<?php
    if (is_int(5)) {
        echo "É um inteiro!<br>";
    }

    if (is_int("5")) {
        echo "É um inteiro!<br>";
    } else {
        echo "Não é um inteiro!<br>";
    }

    $a = is_int(5);

    if ($a) {
        echo "A variável é inteira!<br>";
    }