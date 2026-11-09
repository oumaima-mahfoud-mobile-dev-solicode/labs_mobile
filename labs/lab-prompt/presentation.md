---
marp: true
theme: default
size: 16:9
paginate: true
header: "Lab : Les bases du Prompt Engineering"
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
  font-size: 0.9em;
}
pre {
  background-color: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 6px;
  padding: 8px 12px;
  font-size: 15px;
  margin-top: 8px;
}
blockquote {
  border-left: 4px solid #2563eb;
  background-color: #eff6ff;
  padding: 8px 12px;
  margin-top: 10px;
  font-size: 18px;
}
</style>

<!-- _header: "" -->
<!-- _footer: "" -->

<div class="logo-bar">
  <img src="images/logo-ofppt.png" height="95" alt="Logo OFPPT">
  <img src="images/logo-solicode.png" height="75" alt="Logo SoliCode">
</div>

# Lab : Les bases du Prompt Engineering
## Formation : Apprendre à écrire de bons prompts

- **Encadré par** : ES-SARRAJ FOUAD
- **Présenté par** : Oumaima Mahfoud
- **Centre** : SoliCode Tanger (OFPPT)
- **Domaine** : Intelligence Artificielle & Développement Web

<!-- Note: Bonjour à tous, je vous présente aujourd'hui les bases du Prompt Engineering pour bien communiquer avec l'IA. -->

---

## Plan de la présentation

- **1. Introduction** : Définition et clarté d'un prompt
- **2. Méthodes de base** : Les méthodes RTF et IPO
- **3. Méthode avancée** : La méthode CRISPE
- **4. Techniques et tests** : Few-Shot et amélioration continue
- **5. Pratique et conclusion** : Usage quotidien, TP et évaluation

<!-- Note: Notre présentation se compose de cinq parties simples pour maîtriser l'écriture des prompts. -->

---

## 1. Introduction : Qu'est-ce qu'un prompt ?

- Un prompt est une demande écrite pour une IA.
- Vous posez une question avec des mots simples.
- Vous utilisez ChatGPT ou Copilot pour votre travail.
- L'IA donne une réponse selon la qualité de votre texte.
- Une consigne claire donne toujours un meilleur résultat.

<!-- Note: Un prompt est un texte que vous écrivez pour demander un travail précis à une intelligence artificielle. -->

---

## Demande simple vs Demande précise

| Type | Exemple de prompt | Résultat de l'IA |
| :--- | :--- | :--- |
| **Demande vague** | « Explique Laravel. » | Réponse trop longue et difficile |
| **Demande précise** | « Explique Laravel à un débutant. Utilise des mots simples. Donne un exemple. » | Réponse claire, courte et adaptée |

- **Constat** : La deuxième demande guide l'IA avec précision.
- **Règle d'or** : Plus votre demande est claire, plus la réponse est utile.

<!-- Note: Une demande précise donne du contexte et permet à l'IA de répondre exactement à votre besoin. -->

---

## 2. Méthode RTF : Rôle, Tâche, Format

| Élément | Question | Explication simple |
| :--- | :--- | :--- |
| **R – Rôle** | Qui est l'IA ? | Donner un métier ou une posture à l'IA |
| **T – Tâche** | Que doit faire l'IA ? | Décrire le travail précis à réaliser |
| **F – Format** | Quelle est la forme ? | Choisir la présentation (liste, code, tableau) |

```text
Prompt RTF :
« Tu es un formateur Laravel (Rôle). 
Explique les migrations à un débutant (Tâche). 
Donne 5 étapes courtes et un exemple de code (Format). »
```

<!-- Note: La méthode RTF définit le rôle, le travail à faire et la forme de la réponse attendue. -->

---

## Méthode IPO : Entrée, Traitement, Sortie

| Bloc IPO | Rôle | Exemple Laravel |
| :--- | :--- | :--- |
| **I – Input** | Informations données | « Je connais PHP, mais je débute avec Laravel. » |
| **P – Process** | Travail demandé | « Explique le rôle d'une migration et la commande de création. » |
| **O – Output** | Résultat attendu | « Donne une réponse courte avec un bloc de code et un résumé. » |

- **Utilité** : Organiser les demandes longues sans rien oublier.
- **Principe** : Séparer les données, l'action et le format final.

<!-- Note: La méthode IPO organise clairement vos données en entrée, le traitement demandé et le format de sortie. -->

---

## 3. Méthode CRISPE : Les 6 éléments

| Lettre | Élément | Rôle |
| :---: | :--- | :--- |
| **C** | **Capacity** | Compétence : savoir technique de l'IA |
| **R** | **Role** | Rôle : posture professionnelle |
| **I** | **Insight** | Contexte : niveau et situation de départ |
| **S** | **Statement** | Instruction : consigne principale de travail |
| **P** | **Personality** | Style : ton et longueur de la réponse |
| **E** | **Experiment** | Variantes : plusieurs solutions au choix |

<!-- Note: La méthode CRISPE utilise six éléments précis pour réussir les demandes techniques les plus complexes. -->

---

## Exemple CRISPE : Exercice Laravel

```text
[C - Compétence] : Tu as une solide expertise sur le framework Laravel.
[R - Rôle]       : Tu es formateur pour des développeurs juniors.
[I - Contexte]   : Les apprenants maîtrisent PHP mais découvrent Laravel.
[S - Instruction]: Crée un exercice pratique sur la migration 'create_products_table'.
[P - Style]      : Rédige avec des phrases simples et sans jargon inutile.
[E - Variantes]  : Propose deux niveaux : un exercice guidé et un défi libre.
```

- **Avantage** : L'IA reçoit tout le contexte technique nécessaire.

<!-- Note: Cet exemple montre comment chaque lettre de CRISPE apporte un détail utile pour l'exercice Laravel. -->

---

## 4. Few-Shot Prompting : Apprendre par l'exemple

- **Définition** : Fournir un ou plusieurs exemples avant la consigne.
- **Principe** : L'IA copie la structure et le ton de vos exemples.

```text
Exemple de tâche existante :
« Tâche : Créer le modèle Product.
Critères : Fichier 'Product.php', table 'products', timestamps actifs. »

Nouvelle demande :
« Écris la description de tâche pour le modèle Customer 
avec la même organisation et le même style. »
```

- **À retenir** : Un exemple concret vaut mieux qu'une longue explication.

<!-- Note: Le Few-Shot Prompting consiste à montrer un modèle à l'IA avant de lui demander un nouveau travail. -->

---

## Tester et améliorer un prompt

- **Cycle d'amélioration en 5 étapes** :
  1. **Écrire** : Poser la première version du prompt.
  2. **Tester** : Envoyer la demande à l'outil d'IA.
  3. **Lire** : Analyser la réponse obtenue.
  4. **Corriger** : Préciser le contexte ou ajouter une contrainte.
  5. **Tester encore** : Valider la nouvelle réponse.

> **Règle de sécurité** : Toujours vérifier le code et les commandes avant l'exécution.

<!-- Note: L'amélioration d'un prompt est une démarche en plusieurs étapes pour corriger et fiabiliser la réponse. -->

---

## Exemple d'amélioration : Avant / Après

- **Prompt initial (Avant)** :
  ```text
  « Pourquoi ma migration Laravel ne marche pas ? »
  ```
  *(Problème : manque d'erreur, manque de code, manque de contexte)*

- **Prompt corrigé (Après)** :
  ```text
  « Tu es expert Laravel. Voici mon code de migration et l'erreur retournée :
  'SQLSTATE[42S01]: Base table or view already exists'.
  Explique la cause en 3 phrases simples et donne la commande pour corriger. »
  ```
- **Gain** : Solution directe, rapide et vérifiable.

<!-- Note: Voici un cas réel où l'ajout du message d'erreur et du rôle transforme une réponse inutile en solution directe. -->

---

## 5. Utiliser l'IA au quotidien

| Activité | Objectif | Exemple d'usage développeur |
| :--- | :--- | :--- |
| **Apprendre** | Comprendre un concept | « Explique le rôle d'un contrôleur en 4 puces. » |
| **Rédiger** | Améliorer ses textes | « Corrige l'orthographe de cette documentation. » |
| **Programmer** | Accélérer le code | « Donne la syntaxe d'une validation d'email en Laravel. » |
| **Déboguer** | Résoudre une panne | « Analyse cette trace d'erreur SQLSTATE. » |

- **Post-traitement obligatoire** : Relire, tester le code, valider la logique.

<!-- Note: L'IA accélère l'apprentissage, la rédaction et le code, mais le développeur doit toujours valider le résultat. -->

---

## Synthèse des méthodes de prompting

| Méthode | Quand l'utiliser ? | Bénéfice principal |
| :--- | :--- | :--- |
| **RTF** | Demande simple et rapide | Structure claire en 3 éléments |
| **IPO** | Demande avec des données à traiter | Sépare l'entrée, l'action et la sortie |
| **CRISPE** | Demande complexe ou exercice complet | Niveau de détail maximal |
| **Few-Shot** | Format ou style très précis à imiter | L'IA reproduit fidèlement votre modèle |
| **Test & Retest** | Dès que le résultat est incomplet | Qualité et fiabilité garanties |

<!-- Note: Ce tableau résume les forces de chaque méthode pour choisir le bon outil selon votre besoin. -->

---



## Conclusion

- **Compétence validée** : Savoir dialoguer avec une IA de façon productive.
- **Les 3 règles clés** :
  - Être précis dans le rôle et le format.
  - Fournir des exemples concrets pour guider l'IA.
  - Toujours vérifier le résultat et tester le code proposé.
- **Livrable** : `labs/lab-prompt-engineering/presentation.md`

<!-- Note: En conclusion, un bon prompt transforme l'IA en un assistant fiable et efficace au quotidien. -->

