@@ -1,19 +0,0 @@
# Tournoi de quidditch, suite

![image](https://images.innoveduc.fr/bdd/advanced/quidditch2.gif)

Le tournoi de quidditch continue. Tu vas te baser sur les mêmes données que la quête précédente sur les jointures (pour rappel, le schéma des tables apparaît ci-dessous, et les données sont [ici](../../../../resources/Bdd/Mysql/db5.sql))

![image](https://images.innoveduc.fr/bdd/advanced/quidditch.png)

Écris les requêtes suivantes, et poste-les avec les résultats en guise de solution :

1. Retourne le nom des équipes et le nombre de joueurs par équipe, le tout classé par nombre de joueurs par équipe, de la plus nombreuse à la moins nombreuse.
2. Retourne uniquement les noms des équipes complètes (ayant 14 joueurs ou plus, c’est-à- dire 7 joueurs et 7 remplaçants minimum), classés par ordre alphabétique.
3. L’entraîneur des Gryffindor est superstitieux, son jour préféré est le lundi. Retourne la liste des joueurs de son équipe qui ont été enrôlés un lundi (il souhaite les faire jouer en priorité), et classe les résultats par date d’enrôlement chronologique.

> Tu peux récupérer [ce fichier SQL](../../../../resources/Bdd/Mysql/dump_quete_519_finie.sql) si tu n'as plus les tables des quêtes précédentes.

#### Critères de validation
- Un fichier `quest-6.sql` contenant les 3 requêtes.
- Lorsque tu testes les requêtes (sur le jeu de données fourni), les résultats de chaque requête sont corrects (fais attention aux champs retournés et au tri des résultats pour qu’ils correspondent précisément aux critères demandés).
