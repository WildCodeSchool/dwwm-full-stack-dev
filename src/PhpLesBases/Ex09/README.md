# Exercice 09 : ssap - le retour -
#### Fichiers à rendre : `ssap2.php`
#### Fonctions Autorisées : toute la lib standard PHP
#### Remarques : n/a

Reprenez votre ssap.php. Il s’agit ici de faire la même chose (prendre tous les mots de tous les paramètres et de les trier), mais de changer les modalités du tri : celui-ci devra être [case insensitive](https://fr.wikipedia.org/wiki/Sensibilit%C3%A9_%C3%A0_la_casse), et mettre les caractères alphabétiques dans un premier temps, puis les chiffres, enfin tous les autres caractères, chacun des 3 groupes suivant l’ordre ASCII.

```bash
$> php ./src/phpLesBases/Ex09/ssap2.php
$> php ./src/phpLesBases/Ex09/ssap2.php toto tutu 4234 "_hop XXX" "##" "1948372 AhAhAh"
AhAhAh
toto
tutu
XXX
1948372
4234
##
_hop
$>
```
