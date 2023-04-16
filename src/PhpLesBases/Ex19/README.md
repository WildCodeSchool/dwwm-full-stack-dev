# Exercice Ex19 : raw_text
#### Fichiers à rendre : `raw_text.php`
#### Fonctions Autorisées : header()
#### Remarques : n/a

Créez une page raw_text.php qui affiche la même chose à l’écran que l’on regarde son code source avec curl ou son rendu html dans Chrome.

```bash
$> curl -k "https://localhost/phpLesBases/Ex19/raw_text.php"
<html><body>Hello</body></html>
$>
```

>Si vous aviez lynx vous pourriez tester de cette façon (au saut de ligne prêt) :
```bash
$> lynx -dump "https://localhost/phpLesBases/Ex19/raw_text.php"
<html><body>Hello</body></html>
$> lynx -source "https://localhost/phpLesBases/Ex19/raw_text.php"
<html><body>Hello</body></html>
$>
```
