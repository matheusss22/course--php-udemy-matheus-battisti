<?php

    # Classe
    class Pessoa {

        function falar() {
            echo "Ola pessoal!";
        }
    }

    # A instância de uma classe produz um objeto
    $matheus = new Pessoa();

    $matheus->nome = "Matheus";

    echo $matheus->nome;
    echo "<br>";

    $matheus->falar();