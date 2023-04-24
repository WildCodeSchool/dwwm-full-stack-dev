<?php

while (true) {
    $number = readline("Entrez un nombre: ");
    if (filter_var($number, FILTER_VALIDATE_INT) === false) {
        echo "Ce doit être un nombre entier \n";
    } else {
        if ($number % 2 == 0) {
            echo "Le chiffre est pair \n";
        } else {
            echo "Le chiffre est impair \n";
        }
    }

    $input = readline("Voulez-vous continuer? (Y/N)");
    if (strtolower($input) === 'n') {
        break;
    }
}