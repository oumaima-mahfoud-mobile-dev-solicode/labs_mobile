---
marp: true
theme: default
size: 16:9
paginate: true
header: "Lab Agent — Conception, Skills & Automatisation IA"
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

# Lab Agent IA : Automatisation & Skills
## Préparation des Tâches & Tests IA pour le Projet Fil Rouge

- **Présenté par** : Oumaima Mahfoud
- **Encadré par** : ES-SARRAJ FOUAD
- **Centre** : SoliCode Tanger (OFPPT)
- **Objectif** : Cadrer le projet, structurer les Labs et valider les Skills IA

<!-- Note: Bonjour à tous, je vous présente aujourd'hui le Lab Agent IA pour structurer notre projet et préparer nos skills d'intelligence artificielle. -->

---

## Plan de la présentation

- **1. Introduction** : Cadrage et rôle de l'IA dans le projet
- **2. Projet Fil Rouge** : Application de finances personnelles
- **3. Besoins Techniques** : Stack Laravel, Tailwind et MySQL
- **4. Organisation des Labs** : Les 4 phases d'apprentissage
- **5. Skills & Agents IA** : Création et tests automatisés

<!-- Note: Notre présentation se déroule en cinq parties pour préparer le développement assisté par intelligence artificielle. -->

---

## 1. Introduction : Contexte & Objectifs

- Ce Lab prépare le développement avec l'intelligence artificielle.
- Nous organisons les 30 Labs du projet fil rouge.
- Nous créons des Skills pour guider les agents IA.
- Nous testons les résultats avec Antigravity et Copilot.

<!-- Note: Cette introduction fixe nos objectifs pour préparer et tester nos agents d'intelligence artificielle. -->

---

## 2. Projet Fil Rouge : Finances Personnelles

- **Domaine** : Application de gestion budgétaire et de finances personnelles.
- **Objectif métier** : Aider l'utilisateur à suivre son argent au quotidien.

| Étape de développement | Périmètre & Fonctionnalités clés | Statut technologique |
| :--- | :--- | :--- |
| **Étape 1 : Version Web** | • Suivi des transactions (dépenses et revenus)<br>• Catégorisation des mouvements financiers<br>• Calcul automatique du solde | **Technologies validées**<br>(Stack web définie) |
| **Étape 2 : Application Mobile** | • Consultation nomade du solde<br>• Prévue après la finalisation de la version web | **Reste à choisir**<br>(Non validée) |

<!-- Note: Le projet fil rouge est une application de finances personnelles démarrant par une version web complète. -->

---

## 3. Besoins Techniques : Stack du Projet

| Catégorie | Technologies | Rôle dans le projet |
| :--- | :--- | :--- |
| **Structure et style** | **HTML**, **CSS**, **Tailwind CSS** | Créer les pages et leur design |
| **Langages** | **JavaScript**, **PHP** | Gérer les interactions et la logique serveur |
| **Frameworks** | **Laravel**, **Alpine.js** | Organiser le backend et rendre le frontend interactif |
| **Base de données & ORM** | **MySQL**, **Eloquent ORM** | Stocker les données et interagir avec la base |

- **Principe d'architecture** : Séparation nette entre logique serveur, interface et persistance.

<!-- Note: La stack technique associe Laravel et MySQL pour le backend avec Tailwind CSS et Alpine.js pour l'interface. -->

---

## 4. Organisation des Labs : Phases d'Apprentissage

| Phase | Périmètre technique | Labs associés du référentiel (30 annoncés) |
| :--- | :--- | :--- |
| **Phase 1 : Outils & Technologies** | *Labs 1 à 10* | Markdown, GitHub Pages, Antigravity, Marp, Tailwind... |
| **Phase 2 : Méthodologies & Outils** | *Labs 11 à 16* | 2TUP, Design Thinking, GitHub Issues, Scrum, Copilot... |
| **Phase 3 : Développement & Langages** | *Labs 17 à 24* | POO, PHP, Laravel, Kotlin, JavaScript, Prompt IA... |
| **Phase 4 : Projet & Production** | *Labs 25 à 30* | Veille, Starter, Planning, Git, Stack, **Agent IA (Lab 30)** |

- **Cohérence vérifiée** : 30 Labs planifiés et listés dans la documentation (`lab-intro-stack`).
- **Statut d'avancement** : Seuls les Labs initiés existent sur le dépôt (non réalisés d'avance).

<!-- Note: Les trente labs sont organisés en quatre phases progressives pour préparer chaque étape du développement. -->

---

## 5. Skills et Agents IA : Création & Tests

- **1. Créer les Skills (`SKILL.md`)** :
  - Définir des runbooks modulaires avec rôle, règles et livrables clairs.
  - Structurer les instructions pour cadrer les tâches de développement.

- **2. Tester avec les Agents IA dans VS Code** :
  - **Antigravity** : Planification autonome, exécution d'outils et validation.
  - **GitHub Copilot** : Suggestions de code contextuelles et aide à la syntaxe.

- **3. Vérifier & Améliorer** :
  - Contrôler les résultats réels (respect des règles, absence d'erreurs).
  - Ajuster les prompts et enrichir les consignes en cas d'écart.

<!-- Note: Nous définissons des skills précis, puis nous les testons avec Antigravity et Copilot pour améliorer nos résultats. -->

---

## Conclusion : Acquis & Prochaines Étapes

| Axe | Acquis du Lab | Prochaines étapes |
| :--- | :--- | :--- |
| **Projet Métier** | Cadrage de l'application de finances | Implémentation du calcul automatique du solde |
| **Stack Technique** | Architecture web Laravel / MySQL définie | Sélection ultérieure de la technologie mobile |
| **Agents & Skills** | Méthode de création et test des Skills | Automatisation des tâches de développement |

- **Règle clé** : Toujours vérifier les réponses de l'IA avant toute intégration.
- **Livrable** : `labs/lab-agent/presentation.md` (support Marp 16:9 validé).

<!-- Note: En conclusion, ce lab valide notre méthode de cadrage avec l'IA avant de lancer la réalisation web. -->

