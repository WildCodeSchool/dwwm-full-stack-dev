# Exercice 12 : search_it !
#### Fichiers à rendre : `search_it!.php`
#### Fonctions Autorisées : toute la lib standard PHP
#### Remarques : n/a

Votre but est de réaliser un programme qui affiche la valeur correspondante à une clef donnée comme premier paramètre, parmis les couples “clef :valeur” présents en nombre indéterminé passés en paramètres suivants.

```bash
$> ./search_it!.php
$> ./search_it!.php toto
$> ./search_it!.php toto "key1:val1" "key2:val2" "toto:42"
42
$> ./search_it!.php toto "toto:val1" "key2:val2" "toto:42"
42
$> ./search_it!.php "toto" "key1:val1" "key2:val2" "0:hop"
$> ./search_it!.php "0" "key1:val1" "key2:val2" "0:hop"
hop
$>
````
