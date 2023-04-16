# Exercice 11 : do_op_2
#### Fichiers à rendre : `do_op_2.php`
#### Fonctions Autorisées : toute la lib standard PHP
#### Remarques : n/a

Cette fois-ci, un seul paramètre au menu. Celui-ci contient l’intégralité du calcul à effectuer. Ce calcul sera toujours de la forme nombre opérateur nombre. Un nouveau message d’erreur “Syntax Error” vient compléter le précédent dans le cas où la syntaxe ne serait pas correcte. Il peut ne pas y avoir d’espace entre les chiffres et l’opérateur, ou bien plusieurs.

```bash
$> ./do_op_2.php
Incorrect Parameters
$> ./do_op_2.php toto
Syntax Error
$> ./do_op_2.php "42*2"
84
$> ./do_op_2.php " 42 / 2 "
21
$> ./do_op_2.php "six6*7sept"
Syntax Error
$> ./do_op_2.php '`rm -rf ~/`;'
Syntax Error
```

### BONUS

```bash
$> ./do_op_2.php "-2 + +42"
40
$> ./do_op_2.php "-1.5 + 5"
3.5
$> ./do_op_2.php "-1.5.2 + 5"
Syntax Error
```
