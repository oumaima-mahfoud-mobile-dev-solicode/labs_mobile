---
marp: true
theme: default
size: 16:9
paginate: true
header: "Lab Erreurs JS — Débogage JavaScript & Diagnostic API"
footer: "OFPPT | SoliCode — Français A1"
---

<style>
section {
  font-family: 'Segoe UI', Arial, sans-serif;
  font-size: 22px;
  padding: 30px 48px;
}
.logo-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  padding-bottom: 8px;
  border-bottom: 2px solid #e2e8f0;
}
table {
  font-size: 16px;
  width: 100%;
  border-collapse: collapse;
  margin-top: 8px;
}
th {
  background-color: #2563eb;
  color: white;
  padding: 6px 10px;
}
td {
  padding: 6px 10px;
  border-bottom: 1px solid #e2e8f0;
}
ul {
  margin-top: 6px;
  margin-bottom: 6px;
}
li {
  margin-bottom: 5px;
}
code {
  background-color: #f1f5f9;
  padding: 2px 6px;
  border-radius: 4px;
}
</style>

<!-- _header: "" -->
<!-- _footer: "" -->

<div class="logo-bar">
  <img src="images/logo-ofppt.png" height="95" alt="Logo OFPPT">
  <img src="images/logo-solicode.png" height="75" alt="Logo SoliCode">
</div>

# Lab Erreurs JS : Débogage du Blog
## Identifier, Comprendre et Résoudre les Erreurs JavaScript

- **Encadré par** : ES-SARRAJ FOUAD
- **Présenté par** : Oumaima Mahfoud
- **Centre** : SoliCode Tanger (OFPPT)
- **Contexte** : Développement du Blog (Frontend JS & Backend PHP)

<!-- Note: Bonjour à tous, je vous présente aujourd'hui notre lab sur le débogage des erreurs JavaScript dans notre blog. -->

---

## Plan de la présentation

- **1. Introduction** : Contexte et débogage du Blog
- **2. Définitions Clés** : Notions indispensables
- **3. Outils & Environnement** : VS Code, Chrome DevTools & API PHP
- **4. Étude des 5 Erreurs JS** : Diagnostic, lecture et solutions
- **5. Travail Pratique & Évaluation** : Exercice pas à pas et barème

<!-- Note: Notre présentation se compose de cinq parties simples pour apprendre à corriger les pannes de notre blog. -->

---

## 1. Introduction : Débogage JavaScript du Blog

- Nous développons une application de blog avec JavaScript et PHP.
- Le code JavaScript gère les interactions et affiche les articles.
- Des erreurs bloquent parfois l'exécution du code ou l'affichage.
- Le débogage permet de localiser et corriger chaque panne rapidement.

<!-- Note: Cette introduction présente le rôle indispensable du débogage dans notre projet de blog. -->

---

## 2. Définitions Clés du Débogage

- **Bug** : Défaut ou anomalie dans le code source d'une application
- **Breakpoint (Point d'arrêt)** : Ligne où le navigateur suspend l'exécution du script
- **Stack Trace** : Liste ordonnée des appels de fonctions ayant mené à l'erreur
- **Scope (Portée)** : Zone du code où une variable est visible et accessible

<!-- Note: Ces définitions simples vous aident à nommer précisément chaque concept du débogage. -->

---

## 3. Outils : Environnement de Débogage

- **VS Code** : Éditeur de code avec débogueur intégré et linter JavaScript
- **Google Chrome** : Navigateur d'exécution pour tester l'interface du blog
- **Chrome DevTools** : Outils intégrés pour analyser le DOM, la console et le réseau
- **Serveur PHP** : Backend local qui distribue les articles au format JSON

<!-- Note: Ces quatre outils forment notre environnement complet pour développer et tester notre application. -->

---

## Outils : Configuration VS Code & Chrome

- **Configuration** : Fichier `.vscode/launch.json` configuré sur l'URL du blog
- **Lancement** : Touche `F5` pour ouvrir Chrome avec le débogueur lié
- **Contrôles d'exécution** :
  - `F10` (Step Over) : Passer à la ligne de code suivante
  - `F11` (Step Into) : Entrer à l'intérieur de la fonction
- **Panneau Variables** : Observer la valeur des variables en temps réel

<!-- Note: Nous configurons VS Code avec Chrome pour avancer pas à pas dans le code et observer les variables. -->

---

## Outils : Chrome DevTools (Console & Réseau)

- **Onglet Console (`F12`)** :
  - Affiche les erreurs en rouge avec le nom du fichier et la ligne
  - Permet d'exécuter des commandes JavaScript en direct
- **Onglet Network (Réseau)** :
  - Filtre `Fetch/XHR` pour isoler les appels vers l'API PHP
  - Indique le statut HTTP (`200 OK`, `404 Not Found`, `500 Server Error`)
  - Mesure le temps de réponse du serveur

<!-- Note: La console affiche les erreurs directes et l'onglet Réseau surveille tous les échanges avec le serveur. -->

---

## Outils : Analyse des Appels API & Réponses PHP

- **Diagnostic de la requête** :
  - **Headers** : Vérifier l'URL cible et la méthode (`GET`, `POST`)
  - **Payload** : Contrôler les paramètres envoyés par le JavaScript
- **Diagnostic de la réponse PHP** :
  - **Response / Preview** : Lire le contenu renvoyé par le script PHP
  - **Type de contenu** : Détecter si le serveur renvoie du JSON ou une erreur HTML

<!-- Note: L'onglet Réseau permet de lire la réponse exacte renvoyée par notre script PHP. -->

---

## 4. Étude des 5 Erreurs JS du Blog

- **Erreur 1** : `TypeError: Cannot read properties of null` (Ciblage DOM)
- **Erreur 2** : `ReferenceError: articleId is not defined` (Portée de variable)
- **Erreur 3** : `SyntaxError: Unexpected token '<'` (Format JSON de l'API)
- **Erreur 4** : Erreur Réseau HTTP 404 / 500 (Panne serveur PHP)
- **Erreur 5** : `TypeError: articles.forEach is not a function` (Type de données)

<!-- Note: Nous étudions maintenant cinq erreurs réelles rencontrées pendant la création du blog. -->

---

## Erreur 1 : Cannot read properties of null

- **Problème de départ** : Clic inactif sur le bouton d'ajout de commentaire
- **Lecture de l'erreur** :
  - Message : `Uncaught TypeError: Cannot read properties of null (reading 'addEventListener') at app.js:12`
  - Cause : `document.getElementById('btn-comment')` retourne `null`
- **Outils utilisés** : Console DevTools (repérage ligne 12) + Inspecteur d'éléments
- **Résolution** :
  ```html
  <!-- Solution 1 : ajouter l'attribut defer sur la balise script -->
  <script src="app.js" defer></script>
  <!-- Solution 2 : corriger l'identifiant id="btn-comment" dans le HTML -->
  ```

<!-- Note: Cette erreur arrive quand le script s'exécute avant le chargement complet des balises HTML. -->

---

## Erreur 2 : ReferenceError: articleId is not defined

- **Problème de départ** : L'affichage des détails d'un article ne s'ouvre pas
- **Lecture de l'erreur** :
  - Message : `Uncaught ReferenceError: articleId is not defined at afficherArticle (app.js:25)`
  - Cause : La variable `articleId` est utilisée sans déclaration préalable
- **Outils utilisés** : Linter VS Code (soulignement rouge) + Console Chrome
- **Résolution** :
  ```javascript
  // Déclarer la variable ou la transmettre en paramètre de fonction
  function afficherArticle(articleId) {
    console.log("Chargement de l'article :", articleId);
  }
  ```

<!-- Note: Cette erreur indique une variable inconnue ou appelée en dehors de sa portée. -->

---

## Erreur 3 : SyntaxError: Unexpected token '<'

- **Problème de départ** : La liste des articles ne s'affiche pas à l'écran
- **Lecture de l'erreur** :
  - Message : `SyntaxError: Unexpected token '<', "<!DOCTYPE "... is not valid JSON`
  - Cause : `response.json()` a reçu une page HTML d'erreur au lieu de données JSON
- **Outils utilisés** : Onglet *Network* DevTools -> sous-onglet *Response*
- **Résolution** :
  ```php
  // Côté PHP : corriger la syntaxe et définir le bon en-tête
  header('Content-Type: application/json');
  echo json_encode($articles);
  ```

<!-- Note: Le serveur PHP a envoyé du code HTML d'erreur à la place des données JSON attendues. -->

---

## Erreur 4 : Erreur Réseau HTTP (404 / 500)

- **Problème de départ** : L'envoi d'un nouvel article échoue sans message visible
- **Lecture de l'erreur** :
  - Message : `POST http://localhost/api/articles.php 404 (Not Found)`
  - Cause : Mauvais chemin d'URL ou crash fatal du script PHP (500)
- **Outils utilisés** : Onglet *Network* DevTools (ligne rouge) + Logs d'erreurs PHP
- **Résolution** :
  ```javascript
  const response = await fetch('/api/articles.php', { method: 'POST', body: data });
  if (!response.ok) {
    throw new Error("Erreur serveur détectée : " + response.status);
  }
  ```

<!-- Note: L'onglet Réseau signale en rouge les chemins introuvables ou les pannes côté serveur. -->

---

## Erreur 5 : TypeError: articles.forEach is not a function

- **Problème de départ** : Le chargement des commentaires plante à l'affichage
- **Lecture de l'erreur** :
  - Message : `Uncaught TypeError: articles.forEach is not a function at render (app.js:45)`
  - Cause : La réponse reçue est un objet ou `null`, pas un tableau
- **Outils utilisés** : Débogueur VS Code (Breakpoint ligne 45, volet *Variables*)
- **Résolution** :
  ```javascript
  // Vérifier la présence du tableau avant d'exécuter la boucle
  const liste = Array.isArray(data.articles) ? data.articles : [];
  liste.forEach(article => afficherCarte(article));
  ```

<!-- Note: Cette erreur survient quand nous appliquons une boucle sur une donnée qui n'est pas un tableau. -->

---

## 5. Travail Pratique (TP) : Déboguer le Blog

- **Objectif** : Corriger 5 anomalies dans le code JavaScript et l'API du blog
- **Consignes pas à pas** :
  1. Ouvrir le projet du blog dans VS Code et lancer le débogueur (`F5`)
  2. Ouvrir les DevTools (`F12`) sur les onglets *Console* et *Network*
  3. Reproduire chaque bug sur la page web du blog
  4. Identifier la ligne de code en cause et inspecter la variable
  5. Appliquer la correction et vérifier le bon affichage dans le navigateur

<!-- Note: À présent, vous appliquez les consignes pas à pas pour réparer les cinq bugs du blog. -->

---

## Critères d'évaluation

- **Grille de notation (Total : 20 points)** :

| Critère | Description | Barème |
| :--- | :--- | :--- |
| **Structure & Organisation** | Respect de la structure et de la numérotation unique | 4 points |
| **Maîtrise Technique** | Utilisation correcte des DevTools, breakpoints et de l'onglet Network | 8 points |
| **Résolution des 5 Erreurs** | Diagnostic exact et correction pérenne des 5 bugs du blog | 4 points |
| **Qualité & Clarté (Niveau A1)** | Phrases courtes, vocabulaire simple et lisibilité du code | 4 points |

<!-- Note: La notation évalue la structure, l'usage des outils, la correction des pannes et la clarté. -->

---

## Conclusion : Synthèse & Livrables

- **Compétence validée** : Savoir identifier, isoler et réparer des bugs JavaScript et API
- **Bonne pratique** : Toujours lire le message d'erreur avant de modifier du code
- **Livrable attendu** : `labs/lab-erreur-js/presentation.md`

<!-- Note: En conclusion, nous maîtrisons maintenant les outils indispensables pour diagnostiquer et corriger chaque erreur. -->

