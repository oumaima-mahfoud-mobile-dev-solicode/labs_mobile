---
marp: true
theme: default
paginate: true
header: "Les Labs et la Stack Technique du Projet"
footer: "OFPPT | SoliCode"
---

<style>
section {
  font-family: 'Segoe UI', Arial, sans-serif;
  font-size: 24px;
  padding: 35px 50px;
}
.logo-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 25px;
  padding-bottom: 8px;
  border-bottom: 2px solid #e2e8f0;
}
table {
  font-size: 18px;
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}
th {
  background-color: #2563eb;
  color: white;
  padding: 7px 10px;
}
td {
  padding: 7px 10px;
}
ul {
  margin-top: 8px;
  margin-bottom: 8px;
}
li {
  margin-bottom: 6px;
}
</style>

<!-- _header: "" -->
<!-- _footer: "" -->

<div class="logo-bar">
  <img src="images/logo-ofppt.png" height="95" alt="Logo OFPPT">
  <img src="images/logo-solicode.png" height="75" alt="Logo SoliCode">
</div>

# Les Labs et la Stack Technique
## Projet Technique : Blog de Gestion des Produits

- **Encadré par** : ES-SARRAJ FOUAD
- **Présenté par** : Oumaima Mahfoud
- **Centre** : SoliCode Tanger (OFPPT)


<!-- Note: Bonjour, je vous présente aujourd'hui le projet Blog Produits, sa stack technique et ses 30 Labs pratiques. -->

---

## 1. Projet Technique : Blog Produits


- Application web pour gérer et afficher un catalogue de produits.
-  Gérer les comptes clients, classer les articles et enregistrer les commandes.
- **Organisation des données (3 tables)** :

| Table | Rôle métier | Données principales |
| :--- | :--- | :--- |
| **`customers`** | Données des acheteurs | `id`, `nom`, `email` |
| **`collections`** | Catégories d'articles | `id`, `titre`, `description` |
| **`products`** | Catalogue des produits | `id`, `titre`, `prix`, `collection_id` |

- **Relation clé** : Chaque produit est relié à une catégorie (`collection_id`).

<!-- Note: Notre application gère un catalogue de vente organisé autour de trois tables : les clients, les catégories et les produits. -->

---

## 2. Stack Technique du Projet

| Catégorie | Outils & Technologies | Rôle dans le projet |
| :--- | :--- | :--- |
| **Structure & Style** | **HTML**<br>**CSS**<br>**Tailwind CSS** | • Structure le contenu des pages web<br>• Définit la présentation visuelle<br>• Accélère le design avec des classes utilitaires |
| **Langages** | **JavaScript**<br>**PHP** | • Gère les interactions dynamiques dans le navigateur<br>• Traite la logique métier côté serveur |
| **Frameworks** | **Laravel**<br>**Alpine.js** | • Structure le backend avec un code propre et sécurisé<br>• Ajoute des composants réactifs légers au frontend |
| **Base & ORM** | **MySQL**<br>**Eloquent ORM** | • Stocke et sécurise l'ensemble des données relationnelles<br>• Manipule la base de données facilement en orienté objet |

<!-- Note: Nous utilisons une stack moderne avec Tailwind CSS pour le style, Laravel et Alpine.js pour l'application, et MySQL pour les données. -->

---

## 3. Comprendre les Labs

- **Qu'est-ce qu'un Lab ?**
  - Un atelier pratique d'apprentissage centré sur un outil, une technologie ou un concept précis.

- **Pourquoi faisons-nous des Labs ?**
  - **Découvrir** : explorer et comprendre de nouveaux outils de développement.
  - **Pratiquer** : tester des solutions concrètes avec du code réel.
  - **Progresser** : développer des compétences techniques pas-à-pas.
  - **Résoudre** : surmonter des difficultés de programmation ciblées.

- **Lien avec le Projet Technique** :
  - Chaque Lab prépare une brique technique de l'application finale.
  - Le Lab relie l'apprentissage théorique à la pratique du projet **Blog Produits**.

<!-- Note: Les Labs sont des ateliers pratiques pour tester chaque technologie par le code avant de l'intégrer au projet final. -->

---

## 4. Liste & Organisation des 30 Labs

| Phase | Périmètre | Liste des Labs |
| :--- | :--- | :--- |
| **Phase 1 : Outils & Technologies** | *Labs 1 à 10* | **1.** Qu'est-ce qu'un lab ? · **2.** Markdown · **3.** GitHub Pages<br>**4.** Antigravity · **5.** Marp · **6.** OpenCode · **7.** Pandoc<br>**8.** OmniRoute · **9.** Tailwind CSS · **10.** Preline |
| **Phase 2 : Méthodologies & Collaboration** | *Labs 11 à 16* | **11.** 2TUP · **12.** Design Thinking · **13.** GitHub Issues<br>**14.** Scrum · **15.** GitHub Copilot · **16.** ASCII |
| **Phase 3 : Développement & Langages** | *Labs 17 à 24* | **17.** POO (OOP) · **18.** PHP Natif · **19.** Laravel · **20.** Kotlin<br>**21.** ES7 JavaScript · **22.** Error JS<br>**23.** Prompt-Agent-Skill · **24.** Communication avec IA |
| **Phase 4 : Projet & Production** | *Labs 25 à 30* | **25.** Veille technologique · **26.** Starter · **27.** Planning<br>**28.** Git Avancé · **29.** Lab Stack · **30.** Agent IA |

<!-- Note: Notre parcours regroupe 30 Labs pratiques organisés en quatre phases pour construire l'application complète étape par étape. -->
---

## 5. Conclusion

- **Compétence visée** : Maîtriser le développement full-stack étape par étape.
- **Méthode de travail** : Apprendre par la pratique grâce aux 30 Labs.
- **Livrable final** : Application web **Blog Produits** complète, testée.

<!-- Note: En conclusion, ces 30 Labs nous préparent efficacement à développer et réussir notre projet de Blog Produits. -->