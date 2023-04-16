# Exercice 15 : La Loupe
#### Fichiers à rendre : `loupe.php`
#### Fonctions Autorisées : toute la lib standard PHP
#### Remarques : n/a

Ce matin, en examinant de plus près la reliure du Livre, j’ai remarqué un petit renfoncement. A l’intérieur j’en ai sortit délicatement une toute petite loupe. Elle était vraiment très particulière. Au début, je croyais qu’elle ne grossissait pas. Mais en l’essayant sur plusieurs pages, j’ai remarqué qu’elle ne grossissait que les liens vers les autres pages du Livre, en les mettant simplement en majuscule ! J’ai pour voir cela dû traiter chaque page une par une.

```shell
$> docker compose exec php zsh
/srv> cd src/phpLesBases/Ex15
/srv/src/phpLesBases/Ex15> cat > page.html
<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title="un lien">Ceci est un lien</a>
<br /><a href=http://www.riven.com> Et ca aussi <img src=wrong.image title="et encore ca"></a>
</body></html>
^D
/srv/src/phpLesBases/Ex15> php loupe.php page.html > new_page.html
/srv/src/phpLesBases/Ex15> cat new_page.html
<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title="UN LIEN">CECI EST UN LIEN</a>
<br /><a href=http://www.riven.com> ET CA AUSSI <img src=wrong.image title="ET ENCORE CA"></a>
</body></html>
$>
/srv/src/phpLesBases/Ex15> exit
$>
```