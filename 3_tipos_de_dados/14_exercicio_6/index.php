<?php

    $carro = [
        'modelo' => 'Palio',
        'marca' => 'Fiat',
        'cor' => 'Preto',
        'placa' => 'ABC-1234',
        'rodas' => 4,
        'velocidade_maxima' => 180.00,
        'blindado' => false
    ];

    $marca = $carro['marca'];
    $velocidade_maxima = $carro['velocidade_maxima'];

    echo "O carro é da marca $marca e atinge no máximo $velocidade_maxima km/h.";