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
  font-size: 21px;
  padding: 28px 46px;
}
.logo-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 18px;
  padding-bottom: 8px;
  border-bottom: 2px solid #e2e8f0;
}
table {
  font-size: 14px;
  width: 100%;
  border-collapse: collapse;
  margin-top: 6px;
}
th {
  background-color: #2563eb;
  color: white;
  padding: 5px 8px;
}
td {
  padding: 5px 8px;
  border-bottom: 1px solid #e2e8f0;
}
ul {
  margin-top: 6px;
  margin-bottom: 6px;
}
li {
  margin-bottom: 4px;
}
code {
  background-color: #f1f5f9;
  padding: 2px 5px;
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
- **2. Outils** : Environnement VS Code, Chrome & PHP
- **3. Étude des 5 Erreurs JS** : Diagnostic, lecture et résolutions
- **4. Travail Pratique (TP)** : Débogage pas à pas et évaluation
- **5. Conclusion** : Synthèse des acquis et livrables

<!-- Note: Notre présentation se déroule en cinq étapes claires pour apprendre à corriger les pannes de notre blog. -->

---

## 1. Introduction : Débogage JavaScript du Blog

- Nous développons une application de blog avec JavaScript et PHP.
- Le code JavaScript gère les interactions et affiche les articles.
- Des erreurs bloquent parfois l'exécution du code ou l'affichage.
- Le débogage permet de localiser et corriger chaque panne rapidement.

<!-- Note: Cette introduction présente le rôle indispensable du débogage dans notre projet de blog. -->

---

## 2. Outils : Environnement de Débogage

| Outil de débogage | Rôle principal | Fonctionnalités clés et usage |
| :--- | :--- | :--- |
| **VS Code & Chrome** | Débogage pas à pas | • Configuration `.vscode/launch.json` liée à Chrome (`F5`)<br>• Points d'arrêt (`Breakpoints`), touches `F10` (ligne suivante) et `F11` (entrer)<br>• Panneaux *Variables* et *Watch* pour examiner les valeurs en direct |
| **Chrome DevTools** | Analyse en direct | • **Console (`F12`)** : message d'erreur rouge, localisation du fichier et de la ligne<br>• Test direct d'instructions JavaScript |
| **API & Réseau (PHP)** | Diagnostic serveur | • **Onglet Network** : filtre `Fetch/XHR`, vérification des statuts HTTP (`200`, `404`, `500`)<br>• Sous-onglets `Headers`, `Payload` et `Response` pour inspecter la réponse PHP |

<!-- Note: Ces outils nous permettent d'exécuter le code pas à pas et de surveiller les échanges avec le serveur PHP. -->

---

## 3. Étude des 5 Erreurs JS du Blog

| N° | Erreur & Problème | Lecture & Origine | Outils utilisés | Résolution appliquée |
| :---: | :--- | :--- | :--- | :--- |
| **1** | `TypeError: Cannot read properties of null`<br>Clic inactif sur le bouton commentaire | `null` renvoyé par `getElementById`<br>(le DOM n'est pas encore prêt) | Console DevTools<br>Inspecteur DOM | Ajouter `defer` sur `<script>` ou corriger l'ID HTML |
| **2** | `ReferenceError: articleId is not defined`<br>Affichage du détail d'article bloqué | Variable appelée sans être déclarée dans la portée | Linter VS Code<br>Console Chrome | Déclarer la variable ou la passer en paramètre de fonction |
| **3** | `SyntaxError: Unexpected token '<'`<br>Articles non affichés au chargement | Réception de code HTML d'erreur PHP au lieu de JSON | DevTools Network<br>Sous-onglet Response | Corriger l'erreur PHP, ajouter `header('Content-Type: application/json')` et `json_encode()` |
| **4** | `Erreur HTTP 404 / 500`<br>L'envoi d'un article échoue | Mauvaise URL de route ou crash fatal du script PHP | DevTools Network<br>Logs serveur PHP | Corriger l'URL de l'API et vérifier `if (!response.ok) throw new Error(...)` |
| **5** | `TypeError: articles.forEach is not a function`<br>La liste des articles plante au démarrage | La variable reçue n'est pas un tableau (objet ou `null`) | Débogueur VS Code<br>(Panneau Variables) | Vérifier `Array.isArray(articles)` avant d'exécuter la boucle |

<!-- Note: Ce tableau résume les cinq erreurs courantes de notre blog et la solution pour chacune d'elles. -->

---

## 4. Travail Pratique (TP) & Évaluation

- **Consignes pas à pas du TP** :
  1. Lancer le blog dans Chrome avec le débogueur VS Code (`F5`)
  2. Ouvrir la console DevTools (`F12`) et l'onglet *Network*
  3. Reproduire les 5 bugs et noter la ligne de chaque erreur
  4. Corriger le code (HTML, JS, PHP) et vérifier le bon affichage

| Critère d'évaluation | Description | Barème |
| :--- | :--- | :--- |
| **Structure & Organisation** | Respect des sections et numérotation unique | 4 points |
| **Maîtrise Technique** | Utilisation correcte des DevTools, breakpoints et Réseau | 8 points |
| **Résolution des 5 Erreurs** | Diagnostic exact et correction pérenne des 5 bugs | 4 points |
| **Qualité & Clarté (A1)** | Phrases courtes, vocabulaire simple et clarté du code | 4 points |

<!-- Note: À présent, vous appliquez la méthode sur le blog selon ces consignes et ce barème de notation. -->

---

## 5. Conclusion : Synthèse & Livrables

- **Compétence validée** : Savoir identifier, localiser et corriger les bugs JavaScript et API.
- **Règle d'or du débogage** : Toujours lire le message d'erreur et inspecter le Réseau avant d'éditer le code.
- **Livrable attendu** : Fichier unique `labs/lab-erreur-js/presentation.md`.

<!-- Note: En conclusion, nous disposons des compétences et des outils pour résoudre chaque erreur JavaScript. -->
