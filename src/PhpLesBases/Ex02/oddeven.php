<?php

while (true) {
    $number = readline('Entrez un nombre: ');
    if (false === filter_var($number, FILTER_VALIDATE_INT)) {
        echo "Ce doit être un nombre entier \n";
    } else {
        if (0 == $number % 2) {
            echo "Le chiffre est pair \n";
        } else {
            echo "Le chiffre est impair \n";
        }
    }

    $input = readline('Voulez-vous continuer? (Y/N)');
    if ('n' === strtolower($input)) {
        break;
    }
}
