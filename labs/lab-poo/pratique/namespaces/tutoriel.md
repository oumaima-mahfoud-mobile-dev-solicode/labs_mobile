# Namespaces

## Objectif

Séparer les classes du modèle et du dépôt en respectant la convention `App\`.

## Exemple

Le fichier `demo.php` montre comment :

- créer le namespace `App\Models` pour les données,
- créer le namespace `App\Repositories` pour la logique d'accès,
- importer ou utiliser les classes sans conflit de nom.

## Étapes

1. Déclarer une classe `Article` dans `App\Models`.
2. Déclarer une classe `ArticleRepository` dans `App\Repositories`.
3. Ajouter un objet `Article` dans le dépôt.
4. Afficher le nombre d'articles et sa description.

## Ce que l'on apprend

- Les namespaces organisent le code.
- Ils évitent les conflits entre classes portant le même nom.
- La structure correspond à la convention d'autoload de Laravel.
