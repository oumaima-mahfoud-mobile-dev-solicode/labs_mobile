# Lab POO – Programmation Orientée Objet en PHP

## 1. Présentation
Ce lab permet de découvrir les principes fondamentaux de la programmation orientée objet (POO) avec PHP 8, à travers un projet simple de gestion des articles.

## 2. Objectifs
- Comprendre la classe et l'objet.
- Utiliser les attributs et les méthodes.
- Maîtriser l'héritage et le polymorphisme.
- Appliquer l'encapsulation.
- Utiliser les méthodes et propriétés statiques.
- Découvrir les classes abstraites et les interfaces.

## 3. Structure du projet
```text
lab-poo/
├── classes-abstraites/
│   ├── README.md
│   └── exemple.php
├── interfaces/
│   ├── README.md
│   └── exemple.php
├── heritage/
│   ├── README.md
│   └── exemple.php
├── polymorphisme/
│   ├── README.md
│   └── exemple.php
├── encapsulation/
│   ├── README.md
│   └── exemple.php
├── static/
│   ├── README.md
│   └── exemple.php
├── images/
│   ├── logo-ofppt.png
│   └── logo-solicode.png
├── presentation.md
├── README.md
└── ...
```

## 4. Problématique
Les notions avancées de la POO ne sont pas toujours étudiées en détail lors des premiers cours. Ce lab complète les connaissances avec des exemples concrets et simples.

Nous voulons comprendre comment organiser le code, éviter la duplication, protéger les données et réutiliser les méthodes dans plusieurs classes.

## 5. Exercices pratiques
- **Classes abstraites :** définir une base commune pour les articles.
- **Interfaces :** imposer des méthodes obligatoires.
- **Héritage :** créer des articles spécialisés.
- **Polymorphisme :** utiliser une même méthode avec des comportements différents.
- **Encapsulation :** protéger les attributs avec des accesseurs.
- **Static :** compter les objets créés.

## 6. Démonstration des concepts
### a. Classe abstraite
Une classe abstraite ne peut pas être instanciée directement. Elle sert de modèle pour d'autres classes.

### b. Interface
Une interface définit les méthodes qu'une classe doit obligatoirement implémenter.

### c. Héritage
Une classe fille hérite des propriétés et méthodes de la classe mère.

### d. Polymorphisme
Une méthode peut se comporter différemment selon l'objet qui l'utilise.

### e. Encapsulation
Les propriétés sont masquées et ne peuvent être modifiées que par des méthodes contrôlées.

### f. Static
Les propriétés ou méthodes statiques appartiennent à la classe et non à un objet précis.

## 7. Exécution
Vérifier PHP :
```bash
php -v
```

Exécuter les exemples :
```bash
php .\classes-abstraites\exemple.php
php .\interfaces\exemple.php
php .\heritage\exemple.php
php .\polymorphisme\exemple.php
php .\encapsulation\exemple.php
php .\static\exemple.php
```

## 8. Résultat attendu
- 6 exemples PHP fonctionnels.
- 6 mini tutoriels pratiques.
- Une présentation Marp claire et simple.
- Un projet autonome sans framework ni base de données.

## 9. Informations
- **Présenté par :** Oumaima Mahfoud
- **Encadré par :** ES-SARRAJ FOUAD

## 10. Conclusion
Ce lab permet d'appliquer la POO de manière concrète. Les notions vues ici sont utiles pour construire des applications plus propres, plus structurées et plus faciles à maintenir.