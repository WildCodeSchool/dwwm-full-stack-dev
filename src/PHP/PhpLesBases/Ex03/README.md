# Exercice 03 : ft_split
#### Fichiers à rendre : `ft_split.php`
#### Fonctions Autorisées : toute la lib standard PHP
#### Remarques : n/a

Réalisez la [fonction](https://www.php.net/manual/fr/language.functions.php) ft_split. Elle prend une [chaine de caractères](https://fr.wikipedia.org/wiki/Cha%C3%AEne_de_caract%C3%A8res) en argument, et renvoie un tableau trié des différents mots, initialement séparés par un ou des espaces dans la chaine originale. Votre rendu ft_split.php sera inclus dans un fichier php de test.

```php
// main.php
<?php
include("ft_split.php");
print_r(ft_split("Hello World AAA"));
```

```bash
$> php ./src/phpLesBases/Ex03/main.php
Array (
   [0] => AAA
   [1] => Hello
   [2] => World
)
$>
```