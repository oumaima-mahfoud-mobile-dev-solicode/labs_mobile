# Lab PHP 

## 1. Besoin du projet technique

Nous avons étudié PHP, mais certaines notions importantes n'ont pas encore été approfondies.

Pendant le développement de nos projets, nous avons rencontré des difficultés pour gérer les erreurs et organiser le code.

Ce lab permet de compléter nos connaissances en PHP 8, d'améliorer notre pratique et d'apprendre à écrire un code propre, organisé et réutilisable.

## 2. Notions et techniques à apprendre

Dans ce lab, nous allons découvrir et pratiquer les notions suivantes :

- **Gestion des erreurs et des exceptions :** comprendre `try`, `catch`, `throw` et `InvalidArgumentException` pour détecter et traiter les erreurs.
- **Validation :** vérifier le titre d'un article avant sa création.
- **Namespaces :** organiser les classes PHP et éviter les conflits de noms.
- **Traits :** partager des propriétés et des méthodes entre plusieurs classes.
- **DateTimeImmutable :** gérer les dates de création et de modification.

## 3. Réalisation attendue

Créer un exemple pratique en PHP 8 autour d'un projet simple de gestion des articles.

Le travail doit contenir trois exercices indépendants :

- **Exercice 1 – Erreurs et exceptions :** créer une classe `Article` qui valide le titre et lance une `InvalidArgumentException` si le titre est invalide.
- **Exercice 2 – Namespaces :** organiser les classes dans des espaces de noms et apprendre à les utiliser avec `namespace` et `use`.
- **Exercice 3 – Traits :** créer un trait `Timestampable` pour partager les dates de création et de modification entre plusieurs classes, avec `DateTimeImmutable`.

Pour chaque exercice, présenter le rôle de la notion, expliquer son fonctionnement et réaliser un exemple pratique.

**Livrable :** un code PHP fonctionnel et une présentation Marp pour expliquer les notions et les exercices réalisés.