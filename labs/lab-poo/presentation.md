---
marp: true
theme: default
paginate: true
---

<!-- _header: "" -->
<!-- _footer: "" -->

<div class="logo-bar">
  <img src="../../lab-planning/images/logo-ofppt.png" height="100" alt="Logo OFPPT">
  <img src="../../lab-planning/images/logo-solicode.png" height="85" alt="Logo Solicode">
</div>

# Lab POO en PHP
## Les classes et les objets dans la gestion des produits
Niveau : Débutant (Français A1)

- **Présenté par** : Oumaima Mahfoud
- **Encadré par** : ES-SARRAJ FOUAD

<!-- Note: Bonjour, je présente la programmation objet avec un exemple de gestion des produits. -->

---

## 1. Planification
- **Objectifs** : comprendre six notions de la POO
- **Prérequis** : bases de PHP et variables
- **Étapes** : lire, coder, tester
- **Projet** : gestion des produits

<!-- Note: Nous allons découvrir six notions et les tester dans notre projet. -->

---

## 2. Introduction : le projet
- Application de gestion des produits
- Un produit a un nom et un prix
- Un produit peut avoir un stock
- Exemple : « Tapis de sport », 250 DH

<!-- Note: Notre application aide à organiser les produits et leurs informations. -->

---

## Introduction : notre objectif
- Organiser le code avec des classes
- Réutiliser les règles communes
- Adapter l’affichage selon le produit
- Protéger les données importantes

<!-- Note: La programmation objet organise le code autour des produits. -->

---

## 3. Définitions
- **Classe** : modèle pour créer des objets
- **Objet** : élément créé avec une classe
- **Méthode** : action d’un objet
- **Propriété** : donnée d’un objet

<!-- Note: Une classe décrit les données et les actions d’un objet. -->

---

## 4. Outils
- **PHP 8** : écrire le code objet
- **Visual Studio Code** : modifier les fichiers
- **Terminal** : lancer `php fichier.php`
- **Projet** : produits, prix et stock

<!-- Note: Nous utilisons PHP et un éditeur pour écrire et tester le code. -->

---

## 5. Partie théorique : classe abstraite
- **Rôle** : modèle commun, non créé directement
- Elle peut imposer une méthode aux classes enfants
- Exemple : chaque produit donne son prix affiché

```php
abstract class Produit
{
    abstract public function afficherPrix(): string;
}
```

<!-- Note: La classe abstraite définit une règle commune pour les produits. -->

---

## Interface
- **Rôle** : annoncer les méthodes obligatoires
- Chaque classe qui l’utilise écrit ces méthodes
- Exemple : donner le nom du produit

```php
interface Nommable
{
    public function getNom(): string;
}
```

<!-- Note: L’interface demande une méthode de nom aux classes produit. -->

---

## Héritage
- **Rôle** : reprendre le code d’une autre classe
- `ProduitPhysique` hérite de `Produit`
- `extends` indique l’héritage en PHP

```php
class ProduitPhysique extends Produit
{
    public function afficherPrix(): string
    {
        return 'Prix : 250 DH';
    }
}
```

<!-- Note: Le produit physique reprend les règles de la classe produit. -->

---

## Polymorphisme
- **Rôle** : même méthode, résultat différent
- Le produit physique affiche son prix
- Le produit numérique affiche aussi son type

```php
foreach ($produits as $produit) {
    echo $produit->afficherPrix();
}
```

<!-- Note: Chaque type de produit utilise sa propre version de la méthode. -->

---

## Encapsulation
- **Rôle** : protéger les données d’un objet
- `private` bloque l’accès direct
- Une méthode vérifie le nouveau prix

```php
private float $prix;

public function setPrix(float $prix): void
{
    if ($prix < 0) {
        throw new InvalidArgumentException('Prix invalide');
    }
    $this->prix = $prix;
}
```

<!-- Note: Le prix reste protégé et change seulement après une vérification. -->

---

## Méthodes et propriétés statiques
- **Rôle** : élément commun à toute la classe
- `$nombre` compte les produits créés
- `getNombre()` donne le total
- Appel : `Produit::getNombre()`

```php
public static int $nombre = 0;

public static function getNombre(): int
{
    return self::$nombre;
}
```

<!-- Note: Un élément statique appartient à la classe et non à un seul objet. -->

---

## Travail pratique (TP)
- **Objectif** : créer deux types de produit
1. Créer `Produit.php` avec une classe abstraite
2. Ajouter une interface avec une méthode de nom
3. Créer produit physique et numérique par héritage
4. Protéger et vérifier le prix
5. Tester l’affichage et le nombre de produits

<!-- Note: Vous créez deux types de produits et vous testez leurs méthodes. -->

---

## Critères d’évaluation
- **Structure et organisation** : 4 points
- **Maîtrise des notions et tests** : 8 points
- **Lien avec le projet** : 4 points
- **Clarté et qualité du code** : 4 points
- **Total** : 20 points

<!-- Note: La note évalue le code, les notions, le projet et la clarté. -->

---

## 6. Conclusion
- Une classe modèle les objets
- Les six notions organisent et protègent le code
- **Livrable** : classes de produits testées
- Projet : gestion des produits

<!-- Note: Nous avons utilisé les six notions de la POO dans notre projet. -->
