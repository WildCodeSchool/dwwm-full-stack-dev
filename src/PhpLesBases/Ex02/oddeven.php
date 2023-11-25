<?php

while (true) {
    $nombre = readline('Entrez un nombre:');
    if (!empty($nombre) && preg_match('/^[0-9]+$/', $nombre)) {
        if (0 == $nombre % 2) {
            echo "Le chiffre {$nombre} est pair \n";
        } else {
            echo "Le chiffre {$nombre} est impair \n";
        }
    } else {
        echo "'{$nombre}' n'est pas un chiffre \n";
    }
}
