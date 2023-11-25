<?php

while (!feof(STDIN)) {
    $i = readline('Entrez un nombre:');

    if (feof(STDIN)) {
        break;
    }
    if (!is_numeric($i)) {
        echo $i . " n'est pas un chiffre\n";
    } elseif (0 == $i % 2) {
        echo 'Le chiffre ' . $i . " est pair\n";
    } else {
        echo 'Le chiffre ' . $i . " est Impair\n";
    }
}
