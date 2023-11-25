<?php

while (true) {
    $num = readline('Entrez un nombre: ');
    if (is_numeric($num)) {
        if (0 == $num % 2) {
            echo "Le chiffre $num est Pair\n";
        } else {
            echo "Le chiffre $num est Impair\n";
        }
    } else {
        echo "'$num' n'est pas un chiffre\n";
    }
}