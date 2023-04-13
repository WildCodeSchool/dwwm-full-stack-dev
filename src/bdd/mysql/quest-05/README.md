# Tournoi de quidditch

![image](https://images.innoveduc.fr/bdd/advanced/quidditch.gif)

Tout d’abord, jeune sorcier, si tu n’as jamais eu l’occasion de voir des joueurs voler après un vif d’or sur leur balai Nimbus 2001 flambant neuf, regarde par [ici](https://fr.wikipedia.org/wiki/Quidditch) (tu en apprends des choses à la Wild !)

- Modifie la table `wizard` afin qu’elle corresponde exactement au schéma ci-dessous, et vide là également de tout contenu (TRUNCATE ou DELETE). Tu peux récupérer [ce fichier SQL](../../../../resources/Bdd/Mysql/dump_quete_485_finie.sql) si tu n'as plus les tables des quêtes précédentes.
- Crée les tables `player` et `team` comme indiquées sur la modélisation ci-dessous (noms et types des champs), en prenant soin de déclarer correctement les clés étrangères.
- Charge ensuite dans ta BDD [ce fichier SQL](../../../../resources/Bdd/Mysql/db5.sql) et vérifie que tout s’est bien passé. Nous n'avons pas forcément respecté les vrais rôles des joueurs dans les livres, vérifie juste que tes requêtes renvoient bien les informations stockées en base de données.

![image](https://images.innoveduc.fr/bdd/advanced/quidditch.png)

Une fois ces données correctement chargées, écris les requêtes suivantes, et poste-les avec tes résultats en guise de solution :

1. Retourne les noms, prénoms, rôle et équipe de tous les joueurs, classés dans l’ordre alphabétique par équipe, puis par rôle dans l’équipe, puis par nom de famille, puis par prénom.
2. Retourne uniquement les prénoms et noms des joueurs ayant le rôle de seeker (attrapeur), classés par ordre alphabétique de nom puis prénom
3. Retourne la liste de tous les sorciers qui ne pratiquent pas le quidditch.

#### Critères de validation
- Un fichier `quest-5.sql` contenant les 3 requêtes.
- Lorsque tu testes les requêtes (sur le jeu de données fourni), les résultats de chaque requête sont corrects (fais attention aux champs retournés et au tri des résultats pour qu’ils correspondent précisément aux critères demandés).
