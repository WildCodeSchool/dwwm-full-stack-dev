# Exercice Ex21 : create_account
#### Fichiers à rendre : `index.php` `create.php`
#### Fonctions Autorisées : echo, hash(), file_get_contents(), file_put_contents(), serialize(), unserialize(), _POST
#### Remarques : n/a

Créez une page index.php qui contient un formulaire permettant de créer son compte
avec un identifiant et son mot de passe. Un compte valide est constitué d’un identifiant
et mot de passe non nuls (pas de chaîne vide), sinon renvoyer “ERROR\n”. En cas de
succés renvoyer “OK\n”.

- le formulaire devra appeler “create.php” et utiliser la méthode “POST”
- le champ identifiant devra s’appeler “login”
- le champ mot de passe devra s’appeler “passwd”
- le bouton submit devra s’appeler “submit” et avoir comme valeur “OK” (sans ce champ
- vous devrez stocker les comptes ainsi créés dans /private/passwd. Ce fichier doit être un tableau serializé, voir l’exemple.
- Chaque compte doit être un élément du tableau, et être un tableau lui-même avec un champ “login” contenant l’identifiant et “passwd” contenant le mot de passe hashé.
- vous ne devez pas stocker les mots de passe en “clair” mais “hashés”
- choisissez bien votre algorithme de hashage
- si l’identifiant soumis existe déjà dans le tableau vous devrez renvoyer “ERROR\n”

```bash
$> docker compose exec php rm src/phpLesBases/Ex21/private/passwd
$> curl -d login=toto1 -d passwd=titi1 -d submit=OK 'https://localhost/phpLesBases/Ex21/create.php'
OK
$> docker compose exec php more src/phpLesBases/Ex21/private/passwd
a:1:{i:0;a:2:{s:5:"login";s:5:"toto1";s:6:"passwd";s:60:"$2y$10$bY86HVNj738.wqiigOhIs.HHcDlLze99FtJ.vKIcef1oV9I0Cbl/2";}}
$> curl -d login=toto1 -d passwd=titi1 -d submit=OK 'https://localhost/phpLesBases/Ex21/create.php'
ERROR
$> curl -d login=toto2 -d passwd= -d submit=OK 'https://localhost/phpLesBases/Ex21/create.php'
ERROR
$>
```