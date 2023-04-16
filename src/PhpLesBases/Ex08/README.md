# Exercice 08 : ft_is_sort
#### Fichiers à rendre : `ft_is_sort.php`
#### Fonctions Autorisées : toute la lib standard PHP
#### Remarques : n/a

Il s’agit pour vous de réaliser une petite fonction qui renvoie vrai ou faux selon que le tableau passé en paramètres est trié ou non.

```php
// main.php
<?php

include("ft_is_sort.php");

$tab = ["!/@#;^", "42", "Hello World", "salut", "zZzZzZz"];
$tab[] = "Et qu’est-ce qu’on fait maintenant ?";

if (ft_is_sort($tab)) {
   echo "Le tableau est trie\n";
} else {
   echo "Le tableau n’est pas trie\n";
}

```

```bash
$> php ./src/phpLesBases/Ex08/main.php
Le tableau n'est pas trie
$>
```
