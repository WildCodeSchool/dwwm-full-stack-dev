# Exercice 06 : The wrong kind of pact

#### Fichiers à rendre : `UnholyFactory.php`, `Fighter.php`

#### Fonctions Autorisées : Tout ce que qui a été vu depuis le début de la formation et toute la bibliothèque standard de PHP.

Après d’infructueux efforts pour se constituer une armée, [Stannis Baratheon](https://gameofthrones.fandom.com/fr/wiki/Stannis_Baratheon) est au bord du gouffre. Sans armée, et sans trône, il n’est rien.
De telles circonstances peuvent pousser les hommes à faire un marché avec des forces qu’ils ne maîtrisent pas complètement, et c’est précisément ce qu’il a apparemment fait, car sans cela il n’aurait pas pu attaquer King’s Landing avec une armée qui semble n’avoir pas de fin ...
Vous devez écrire les classes Fighter et UnholyFactory, telles que le fichier [testEx06-1.php](../../../../resources/PHP/Tests/testEx06-1.php) qui vous est fourni en annexe produise la sortie ci-après :

```bash
$> php resources/PHP/Tests/testEx06-1.php
(Factory absorbed a fighter of type foot soldier)
(Factory already absorbed a fighter of type foot soldier)
(Factory absorbed a fighter of type archer)
(Factory absorbed a fighter of type assassin)
(Factory can't absorb this, it's not a fighter)
(Factory fabricates a fighter of type foot soldier)
(Factory hasn't absorbed any fighter of type llama)
(Factory fabricates a fighter of type foot soldier)
(Factory fabricates a fighter of type archer)
(Factory fabricates a fighter of type foot soldier)
(Factory fabricates a fighter of type assassin)
(Factory fabricates a fighter of type foot soldier)
(Factory fabricates a fighter of type archer)
* draws his sword and runs towards the Hound *
* draws his sword and runs towards Tyrion *
* draws his sword and runs towards Podrick *
* draws his sword and runs towards the Hound *
* draws his sword and runs towards Tyrion *
* draws his sword and runs towards Podrick *
* shoots arrows at the Hound *
* shoots arrows at Tyrion *
* shoots arrows at Podrick *
* draws his sword and runs towards the Hound *
* draws his sword and runs towards Tyrion *
* draws his sword and runs towards Podrick *
* creeps behind the Hound and stabs at it *
* creeps behind Tyrion and stabs at it *
* creeps behind Podrick and stabs at it *
* draws his sword and runs towards the Hound *
* draws his sword and runs towards Tyrion *
* draws his sword and runs towards Podrick *
* shoots arrows at the Hound *
* shoots arrows at Tyrion *
* shoots arrows at Podrick *
$>
```

> Accessoirement, le fichier [testEx06-2.php](../../../../resources/PHP/Tests/testEx06-2.php) qui vous est fourni en annexe doit produire une [erreur fatale](https://stackoverflow.com/questions/44229768/fatal-error-class-xxx-contains-1-abstract-method-and-must-therefore-be-declared) au lancement.