# Exercice 14 : Autre Temps
#### Fichiers à rendre : `one_more_time.php`
#### Fonctions Autorisées : toute la lib standard PHP et encore plein de regexp
#### Remarques : n/a

Toujours bloqué sur cette maudite île. D’ailleurs, quelle journée exactement sommes-nous ? Le temps n’a visiblement pas la même signification ici. Je remarque en feuilletant le Livre que certaines inscriptions pourraient correspondre à des dates. Je vais m’efforcer de les déchiffrer. Midi : ça y est ! j’ai trouvé. Ces inscriptions sont systématiquement de la forme suivante :
- Jour_de_la_semaine Numéro_du_jour Mois Année Heures:Minutes:Secondes
- Le jour de la semaine est complet, en toutes lettres, parfois avec une majuscule, et en français.
- Le numéro du jour est toujours sur 1 ou 2 caractères.
- Le mois s’exprime en toutes lettres, également parfois avec une majuscule.
- L’année est formée de 4 chiffres.
- Enfin, les heures, minutes et secondes sont toutes sur 2 chiffres.
- Il y a 4 espaces pour séparer les 5 morceaux.

Je vais désormais pouvoir repérer plus facilement si certains passages correspondent à des dates, et les convertir dans un mode plus rationnel et plus lisible pour moi : le nombre de secondes écoulées depuis le premier janvier 1970.

```bash
$> ./one_more_time.php "Mardi 12 Novembre 2013 12:02:21"
1384254141
$> ./one_more_time.php "Mercreday 1stJuily 99"
Wrong Format
$> ./one_more_time.php
$>
```

> Note : Je n’ai jamais rencontré de date bien formée qui soit incohérente.