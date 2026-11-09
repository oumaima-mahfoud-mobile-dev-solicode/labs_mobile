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
- Projet : gestion des produits

<!-- Note: Ce lab permet d'organiser le code PHP avec les principes de la POO. -->

---

## 2. Définitions

- Une classe est un modèle.
- Un objet est une instance de classe.
- Une méthode contient une action.
- Un attribut stocke une donnée.
- L'héritage réutilise le code.

```php
class Produit {
    public $nom;

    public function afficher() {
        echo $this->nom;
    }
}
```

<!-- Note: La POO aide à structurer le code et à le réutiliser. -->

---

## 3. Problème

- À compléter à partir de la réponse de l'étudiant : quel problème concret motive ce lab ?
- Préciser le contexte et les conséquences constatées.
- Ne pas présenter d'exemple comme un problème vécu sans confirmation.


<!-- Note: Je précise le contexte et les conséquences du problème avant d'appliquer la solution. -->

---

## 4. Solution

- Présenter la démarche proposée par l'étudiant, après l'avoir recueillie.
- Prévoir un Quick Start et un premier exemple PHP exécutable.
- Montrer un exercice sur les erreurs et exceptions, un sur les namespaces et un sur les traits, liés au projet.
- Terminer par l'intégration et la vérification des exemples.

### Exercices pratiques PHP

- Chaque notion a son sous-dossier.
- Chaque sous-dossier a un exemple exécutable : `exemple.php` ou `demo.php`.
- Chaque sous-dossier a aussi un tutoriel : `tutoriel.md`.
- Le fil conducteur est la gestion d'articles.

```bash
php .\erreurs-exceptions\exemple.php
php .\namespaces\demo.php
php .\traits\exemple.php
```

**Objectifs :**
- Erreurs et exceptions : valider un titre et traiter une `InvalidArgumentException` au point d'entrée.
- Namespaces : séparer le modèle et le dépôt en reprenant l'autoload `App\`.
- Traits : partager l'horodatage entre un article et un commentaire.

**Livrable :** démonstrations PHP autonomes, sans base de données ni framework.

<!-- Note: La POO aide à organiser les exercices PHP et à les rendre faciles à tester. -->