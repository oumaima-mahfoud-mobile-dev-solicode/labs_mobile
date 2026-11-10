---
marp: true
theme: default
paginate: true
---

<!-- _header: "" -->
<!-- _footer: "" -->

<div class="logo-bar">
  <img src="./images/logo-ofppt.png" height="100" alt="Logo OFPPT">
  <img src="./images/logo-solicode.png" height="85" alt="Logo Solicode">
</div>

# Lab POO

## Programmation Orientée Objet en PHP

- **Présenté par** : Oumaima Mahfoud
- **Encadré par** : ES-SARRAJ FOUAD

<!-- Note: Je présente mon travail sur la programmation orientée objet en PHP. -->

---

## Plan de Présentation

1. Introduction & Stack Technique
2. Définitions
3. Problème
4. Solution

<!-- Note: Voici le plan de ma présentation sur la POO en PHP. -->

---

## 1. Introduction & Stack Technique

- PHP 8
- Classes, objets, méthodes
- Encapsulation, héritage, polymorphisme
- Projet : gestion des articles

<!-- Note: Ce lab permet d'organiser le code PHP avec les principes de la POO. -->

---

## 2. Définitions

- Une classe est un modèle.
- Un objet est une instance de classe.
- Une méthode contient une action.
- Un attribut stocke une donnée.
- L'héritage réutilise le code.

```php
class Article {
    public $titre;

    public function afficher() {
        echo $this->titre;
    }
}
```

<!-- Note: La POO aide à structurer le code et à le réutiliser. -->

---

## 3. Problème

- Nous avons étudié PHP, mais pas toutes ses notions en détail.
- Pendant le développement, nous avons rencontré plusieurs erreurs.
- Nous ne savions pas encore les gérer avec `try`, `catch` et `throw`.
- Nous devons compléter nos connaissances et pratiquer.

<!-- Note: Ce lab répond à nos besoins de pratique et de gestion des erreurs. -->

---

## 4. Solution

- Découvrir les notions manquantes de PHP.
- Valider le titre d'un article et gérer une `InvalidArgumentException`.
- Organiser les classes avec les namespaces.
- Partager la date de création avec un trait.
- Appliquer chaque notion dans un exercice pratique.

<!-- Note: Les exercices nous aident à comprendre et à appliquer ces notions. -->
