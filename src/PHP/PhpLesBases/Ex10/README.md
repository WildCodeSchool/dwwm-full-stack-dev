# Exercice 10 : do_op
#### Fichiers à rendre : `do_op.php`
#### Fonctions Autorisées : toute la lib standard PHP
#### Remarques : n/a

Ce programme php prend 3 paramètres. Le second est une opération arithmétique parmi les suivantes : ’+’, ’-’, ’*’, ’/’, ’%’. Les premiers et troisièmes sont des nombres. Il s’agit de réaliser l’opération et d’afficher le résultat. Le programme ne doit pas effectuer de gestion d’erreur, hormis le nombre de paramètres fournis. Espaces et tabulations peuvent être présents dans les 3 paramètres.

```bash
$> php ./src/phpLesBases/do_op.php
Incorrect Parameters
$> php ./src/phpLesBases/do_op.php 1 + 3
4
$> php ./src/phpLesBases/do_op.php " 1" " +" " 3"
4
$> php ./src/phpLesBases/do_op.php " 1" " *" " 3"
3
$> php ./src/phpLesBases/do_op.php 42 "% " 3
0
```

> Note : respectez le message d’erreur.