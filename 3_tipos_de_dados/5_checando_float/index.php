<?php
    if (is_float(5.1)) {
        echo "É um float!<br>";
    }

    if (is_float(5)) {
        echo "É um float!<br>";
    } else {
        echo "Não é um float!<br>";
    }

    $a = is_float(5.1);

    if ($a) {
        echo "A variável é float!<br>";
    }