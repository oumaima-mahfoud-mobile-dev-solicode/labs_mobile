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

- **Présenté par :** Oumaima Mahfoud
- **Encadré par :** ES-SARRAJ FOUAD

---

## Plan

1. Introduction
2. Classes et objets
3. Classes abstraites et interfaces
4. Héritage
5. Polymorphisme
6. Encapsulation
7. Propriétés et méthodes statiques
8. Conclusion

---

## 1. Introduction

La POO permet de structurer le code en classes et objets.
Elle aide à organiser les projets, à réutiliser les méthodes et à protéger les données.

Dans ce lab, nous utilisons un exemple simple de gestion des articles.

---

## 2. Classes et objets

- Une classe est un modèle.
- Un objet est une instance de la classe.
- Un attribut stocke une donnée.
- Une méthode définit une action.

```php
class Article {
    public string $titre;

    public function afficher(): string {
        return $this->titre;
    }
}
```

---

## 3. Classes abstraites et interfaces

### Classe abstraite
- Elle sert de base.
- Elle ne peut pas être instanciée.

### Interface
- Elle impose des méthodes obligatoires.
- Une classe doit les implémenter.

---

## 4. Héritage

Une classe fille hérite des propriétés et méthodes de la classe mère.

```php
class ArticleEnLigne extends Article {
    public function afficher(): string {
        return "Article en ligne : " . $this->titre;
    }
}
```

Cela évite la duplication du code.

---

## 5. Polymorphisme

Le même comportement peut avoir plusieurs formes.

```php
function afficherArticle(Article $article) {
    echo $article->afficher();
}
```

L'objet peut être de type différent, mais la méthode fonctionne avec chaque classe.

---

## 6. Encapsulation

L'encapsulation protège les données.
On utilise des attributs privés et des méthodes publiques pour lire ou modifier une valeur.

```php
class Article {
    private string $titre;

    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }
}
```

---

## 7. Propriétés et méthodes statiques

Une propriété ou une méthode statique appartient à la classe, pas à un objet particulier.

```php
class CompteurArticle {
    public static int $total = 0;

    public function __construct() {
        self::$total++;
    }
}
```

---

## 8. Conclusion

Ce lab permet de comprendre les bases de la POO en PHP.
Les notions vues ici sont importantes pour créer des projets structurés, réutilisables et maintenables.

Merci pour votre attention.

---

<style>
section {
  font-size: 28px;
}
.logo-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}
</style>
