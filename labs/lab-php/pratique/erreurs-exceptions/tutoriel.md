# Erreurs et exceptions

## Objectif

Valider un titre d'article et gérer les erreurs proprement.

## Exemple

Le fichier `exemple.php` montre comment :

- vérifier qu'un titre n'est pas vide,
- refuser une valeur trop courte,
- utiliser `try` et `catch` pour gérer l'exception.

## Étapes

1. Déclarer une fonction qui valide le titre.
2. Lever une `InvalidArgumentException` si la valeur est incorrecte.
3. Attraper cette exception au point d'entrée.
4. Afficher un message clair à l'utilisateur.

## Ce que l'on apprend

- Les exceptions servent à signaler un problème.
- Le bloc `try/catch` centralise la gestion des erreurs.
- La logique de validation reste lisible et testable.
