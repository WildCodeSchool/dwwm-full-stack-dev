@@ -1,21 +0,0 @@
# Première base de données

- Dans un fichier `quest-1_1.sql`
  1. Ajoute les requêtes permettant de creer la base de donnees `wild_db_quest`.
- Ensuite, importe le fichier SQL [db.sql](../../../../resources/Bdd/Mysql/quest1.sql) : cela te créera la table `wizard` comme indiqué dans l’exemple plus haut.
- Dans un fichier `quest-1_2.sql`
  1. Ajoute une requête permettant de modifier le table `wizard` en ajoutant un champ `is_muggle` de type booléen, obligatoire, qui permettra d’indiquer si le sorcier est ou non un moldu. Si tu ne sais pas ce qu’est un [moldu](https://fr.wikipedia.org/wiki/Univers_de_Harry_Potter#Moldus), c’est que tu en es sans doute un toi-même !
  2. Crée ensuite la table `school`, contenant les champs :
     - `id` (clé primaire, entier auto-incrémenté, ne pouvant pas être NULL)
     - `name` (chaîne de caractères de longueur 100, obligatoire = ne pouvant pas être NULL)
     - `capacity` (entier, non obligatoire)
     - `country` (chaîne de caractères de longueur 255, obligatoire)
  3. Exécute les commandes `SHOW TABLES` et fais un `DESCRIBE` sur les tables `wizard` et `school`.

À toi de jouer, jeune sorcier !

![image](http://images.innoveduc.fr/bdd/harry_spell.gif)

#### Critères de validation
- Un `quest-1_1.sql` et `quest-1_2.sql` contenant les requetes demandées.
- La requête `SHOW TABLES` montre que la base de données `wild_db_quest` existe et contient les deux tables `wizard` et `school`.
- La table `wizard` est correctement importée. Elle contient bien un nouveau champ `is_muggle` de type BOOL ou TINYINT(1) et NOT NULL.

> Ces commandes peuvent être lancées plusieurs fois sans generer d'erreurs
```bash
$ mysql -u root --password={password} < quest-1_1.sql
mysql: [Warning] Using a password on the command line interface can be insecure.
$ mysql -u root --password={password} wild_db_quest < ../../../../resources/Bdd/Mysql/quest1.sql
mysql: [Warning] Using a password on the command line interface can be insecure.
$ mysql -u root --password={password} wild_db_quest < quest-1_2.sql
mysql: [Warning] Using a password on the command line interface can be insecure.
Tables_in_wild_db_quest
school
wizard
Field   Type    Null    Key     Default Extra
id      int     NO      PRI     NULL    auto_increment
firstname       varchar(100)    NO              NULL
lastname        varchar(100)    NO              NULL
birthday        date    NO              NULL
birth_place     varchar(255)    YES             NULL
biography       text    YES             NULL
is_muggle       tinyint(1)      NO              NULL
Field   Type    Null    Key     Default Extra
id      int     NO      PRI     NULL    auto_increment
name    varchar(100)    NO              NULL
capacity        int     YES             NULL
country varchar(255)    NO              NULL
```
