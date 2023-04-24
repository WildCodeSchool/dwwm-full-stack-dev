<?php

for ($i = 0; $i < 10; $i++) {
    $number = readline('Entrez un nombre: ');
    readline_add_history($number);

    // switch ($number) {
    //     case preg_match("/^[0-9]/", $number) && $number % 2 == 0 || $number == 0:
    //         echo "Le chiffre " . $number . " est Pair\n";
    //         break;
    //     case preg_match("^[0-9]", $number) && !$number % 2 == 0:
    //         echo "Le chiffre " . $number . " est Impair\n";
    //         break;
    //     case !preg_match("/^[0-9]/", $number):
    //         echo "'$number' n'est pas un chiffre\n";
    //         break;
    // }

    if (preg_match("/^[0-9]+$/", $number) && $number % 2 == 0 || $number == 0) {
        echo "Le chiffre " . $number . " est Pair\n";
    } elseif (!preg_match("/^[0-9]+$/", $number)) {
        echo "'$number' n'est pas un chiffre\n";
    } else {
        echo "Le chiffre " . $number . " est Impair\n";
    }
}
