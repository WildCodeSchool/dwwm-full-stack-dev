# Exercice Ex18 : cookie_crisp
#### Fichiers à rendre : `cookie_crisp.php`
#### Fonctions Autorisées : echo, setcookie() et time()
#### Remarques : n/a

Créez une page cookie_crisp.php qui permet de créer, lire, et effacer un cookie
Exemple :

```bash
$> curl -c cook.txt -k "https://localhost/phpLesBases/Ex18/cookie_crisp.php?action=set&name=plat&value=choucroute"
$> curl -b cook.txt -k "https://localhost/phpLesBases/Ex18/cookie_crisp.php?action=get&name=plat"
choucroute
$> curl -c cook.txt -k "https://localhost/phpLesBases/Ex18/cookie_crisp.php?action=del&name=plat"
$> curl -b cook.txt -k "https://localhost/phpLesBases/Ex18/cookie_crisp.php?action=get&name=plat"
$>
```