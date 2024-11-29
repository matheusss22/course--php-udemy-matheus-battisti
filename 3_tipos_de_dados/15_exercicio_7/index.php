<?php

    $pessoa = [
        'nome' => 'Matheus',
        'idade' => 13,
        'profissao' => 'Programador'
    ];

    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];

    $maior_de_idade = false;

    if ($idade > 18) {
        $maior_de_idade = true;
    }

    if ($maior_de_idade) {
        echo "$nome é maior de idade! <br>";
    } else {
        echo "$nome não é maior de idade! <br>";
    }