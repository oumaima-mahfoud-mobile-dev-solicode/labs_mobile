# Traits

## Objectif

Partager le comportement d'horodatage entre plusieurs classes.

## Exemple

Le fichier `exemple.php` montre comment :

- créer un trait `Timestampable`,
- ajouter les propriétés `createdAt` et `updatedAt`,
- réutiliser le même code dans `Article` et `Commentaire`.

## Étapes

1. Déclarer un trait avec les méthodes d'horodatage.
2. Utiliser `use Timestampable;` dans chaque classe.
3. Initialiser les dates lors de la création.
4. Mettre à jour la date de modification avec `touch()`.

## Ce que l'on apprend

- Les traits évitent la duplication de code.
- Plusieurs classes peuvent partager le même comportement.
- La logique commune reste centralisée et simple à maintenir.
