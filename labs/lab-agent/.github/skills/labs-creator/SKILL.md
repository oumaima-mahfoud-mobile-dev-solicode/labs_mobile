---
name: labs-creator
description: Mandatory standard runbook for provisioning hands-on labs with exactly one default deliverable (presentation.md in Marp format) in French A1, with mandatory practical work (TP) and evaluation criteria.
---

# Labs Creator Skill

Use this skill whenever the user requests to create or structure a new Lab in the workspace's `labs/` directory.

---

## 1. Mandatory Default Lab Standard

Whenever a Lab is requested, apply these default rules unless the user explicitly requests a different format:

1. **Folder Provisioning**:
   - Normalize the user-supplied Lab name into a clean, filesystem-safe slug (e.g., `gestion-de-projet`).
   - Create the Lab folder inside `labs/<lab-slug>/`.
   - If `labs/` does not exist in the workspace root, confirm with the user before creating it.
   - If `labs/<lab-slug>/` already exists, **do not overwrite or delete anything**. Inspect the existing directory and ask the user how to proceed.
2. **Exactly One Generated Content File**:
   - Each Lab must contain **strictly one generated content file by default**: `labs/<lab-slug>/presentation.md`.
   - **Do not create `README.md`, separate Markdown files, starter folders, or additional files/subdirectories** unless explicitly requested by the user.
3. **Marp Frontmatter**:
   - `presentation.md` must be a valid Marp presentation beginning with:
     ```yaml
     ---
     marp: true
     theme: default
     paginate: true
     ---
     ```
4. **Mandatory 6-Section Framework**:
   - Slides must strictly follow the six core sections:
     1. *Planification*
     2. *Introduction*
     3. *Définitions*
     4. *Outils*
     5. *Partie théorique*
     6. *Conclusion*
4. **Slide Presentation Aesthetics & Conciseness (« Zéro Texte Superflu »)**:
   - Keep slides concise, minimal, well-organized, and ready to present.
   - Strictly apply the "Zero Superfluous Text" rule: no paragraphs or dense text blocks. Slides must consist exclusively of keywords, short bullet points, diagrams, and code snippets.
   - **Introduction slide exception**: The introduction is the only slide using full sentences, which must be strictly short, direct, and simple (Subject + Verb + Object, French A1).
   - Separate every slide with a markdown horizontal rule (`---`).
   - Avoid slide overcrowding: maximum 3 to 5 short bullets or 1 focused concept/code snippet per slide.
   - Commands and code blocks must be copy-paste ready.
5. **Title Slide & Presentation Standards (`05_presentation_structure.md`)**:
   - **Mandatory Title Slide Layout**:
     - Display both the **OFPPT** and **SoliCode** logos cleanly at the top of the title slide with proportional dimensions (e.g., container `<div class="logo-bar">`, height ~85-110px).
     - Keep the two logos in a project image directory (e.g., `images/`) if they already exist, and reference them via correct local relative paths.
     - Never delete, replace, or invent official logos.
     - If a logo is missing, **flag its absence and request the required file** before proceeding.
     - Always display the presentation title, `- **Présenté par** : Oumaima Mahfoud` and `- **Encadré par** : ES-SARRAJ FOUAD`.
   - **Plan & Numbering**:
     - The presentation agenda/plan slide must contain **at most 5 main titles**.
     - Slide numbering must be strictly unique: never repeat the same chapter number on multiple slides.
   - **Commentaire de Présentation Oral Obligatoire (Speech en Français A1)** :
     - Sur **chaque slide**, inclure obligatoirement un commentaire de présentation / note pour l'orateur sous la forme : `<!-- Note: [Texte] -->`.
     - Contenu : le speech oral exact que l'étudiant prononce pour expliquer la slide.
     - Règle stricte : **une seule phrase courte**, simple et directe, rédigée en **Français A1**.
   - **Marp Rendering Verification**:
     - Always verify the Marp rendering and slide integrity before finishing.
6. **Draft-First Approval Gate**:
   - Always display the complete Marp presentation draft directly in the conversation first.
   - **Pause and wait for explicit user approval** before saving `presentation.md` to disk.
9. **Creation & Verification**:
   - After explicit approval, write `labs/<lab-slug>/presentation.md`.
   - Inspect and read back the saved file using available filesystem tools to verify path, formatting, and content integrity.

---

## 2. Step-by-Step Lab Creation Workflow

### Step 1: Intake & Collision Check
1. If the Lab name or topic is missing, ask the user directly before proceeding.
2. Normalize the name into `labs/<lab-slug>/`.
3. Check if `labs/<lab-slug>/` exists:
   - If it already exists: stop, inspect its contents, and ask the user how to proceed (do not overwrite).
   - If it does not exist: create the folder `labs/<lab-slug>/`.

### Step 2: Draft the Marp Presentation (`presentation.md`)
Draft the slides in simple, clear French (Niveau A1) structured as:
- **Slide 1: Titre** : Logos OFPPT et SoliCode en haut (chemins relatifs locaux), titre du Lab, sous-titre, « Présenté par : Oumaima Mahfoud » et « Encadré par : ES-SARRAJ FOUAD ».
- **Slide 2: 1. Planification** : Objectifs opérationnels, prérequis et étapes clés.
- **Slide 3: 2. Introduction** : Sujet du projet, utilité pratique et contexte.
- **Slide 4: 2. Introduction (Objectif)** : But précis du projet et intérêt du format Markdown.
- **Slide 5: 3. Définitions** : Termes et concepts strictement essentiels définis simplement.
- **Slide 6: 4. Outils** : Outils logiciels requis (éditeur, Marp, navigateur).
- **Slide 7+: 5. Partie théorique** : Principes essentiels, règles de syntaxe et exemples concrets tirés du projet.
- **Slide TP: 6. Travail Pratique (TP)** : Consignes d'application pas-à-pas numérotées pour l'étudiant.
- **Slide Critères: 6. Critères d'évaluation** : Grille de notation sur 20 points répartie par critères clairs.
- **Slide Finale: 6. Conclusion** : Synthèse d'apprentissage et livrable attendu.

### Step 3: Present Complete Draft in Conversation
- Display the complete Marp presentation draft in the chat, confirming the target path: `labs/<lab-slug>/presentation.md`.

### Step 4: Wait for Explicit Approval
- **Pause execution.** Do NOT create or write `presentation.md` until the user explicitly approves the draft.

### Step 5: Save & Verify
1. Once approved, write the content exclusively to `labs/<lab-slug>/presentation.md`.
2. Read the saved file back using available filesystem tools to verify content, frontmatter, and slide delimiters.
3. Report a concise confirmation to the user.

---

## 3. Travail Pratique (TP) & Critères d'Évaluation

Chaque lab doit obligatoirement formaliser le travail pratique et la grille de notation comme suit :

### 1. Spécifications du Travail Pratique (TP)
- **Objectif du TP** : Définir clairement ce que l'étudiant doit produire de manière autonome.
- **Consignes séquencées** :
  1. Étape 1 : Création du fichier ou de la structure de base.
  2. Étape 2 : Application des notions théoriques vues en cours.
  3. Étape 3 : Intégration des données concrètes du projet (ex : entités ou tables).
  4. Étape 4 : Mise en forme et validation finale.

### 2. Grille Standard des Critères d'Évaluation (20 points)
| Critère | Description | Barème |
| :--- | :--- | :--- |
| **Structure & Organisation** | Respect des 6 sections obligatoires et de la hiérarchie | 4 points |
| **Maîtrise Technique** | Utilisation correcte des syntaxes et outils (Markdown, code, etc.) | 8 points |
| **Intégration Métier / Données** | Pertinence et cohérence avec le sujet et les données du projet | 4 points |
| **Qualité & Clarté (Niveau A1)** | Phrases courtes, vocabulaire simple, orthographe soignée | 4 points |

---

## 4. Standard Marp Presentation Template

```markdown
---
marp: true
theme: default
paginate: true
---

<!-- _header: "" -->
<!-- _footer: "" -->

<div class="logo-bar">
  <img src="images/logo-ofppt.png" height="110" alt="Logo OFPPT">
  <img src="images/logo-solicode.png" height="85" alt="Logo Solicode">
</div>

# [Titre du Lab]
## [Sous-titre / Thème du projet]
Niveau : Débutant (Français A1)

- **Présenté par** : Oumaima Mahfoud
- **Encadré par** : ES-SARRAJ FOUAD

<!-- Note: Bonjour à tous, je vous présente aujourd'hui notre lab sur ce sujet. -->

---

## 1. Planification
- **Objectifs d'apprentissage** : ...
- **Prérequis** : ...
- **Étapes du Lab** : ...

<!-- Note: Cette étape fixe les objectifs d'apprentissage et les étapes clés du lab. -->

---

## 2. Introduction : Sujet du projet
- Présentation directe du projet.
- Les données ou tables utilisées.

<!-- Note: Le projet est une application pratique pour appliquer directement nos compétences. -->

---

## 2. Introduction : Objectif du projet
- But principal du projet.
- Pourquoi utiliser cette technologie / méthode.

<!-- Note: Cette méthode nous permet de développer un code propre, rapide et sécurisé. -->

---

## 3. Définitions
- **[Concept 1]** : Définition en une phrase simple.
- **[Concept 2]** : Définition en une phrase simple.

<!-- Note: Nous définissons ici les notions clés essentielles pour comprendre le sujet. -->

---

## 4. Outils
- **[Outil 1]** : Rôle et utilisation simple.
- **[Outil 2]** : Rôle et utilisation simple.

<!-- Note: Ces outils facilitent notre développement et notre travail quotidien. -->

---

## 5. Partie théorique : [Concept clé]
- Règle de syntaxe ou principe direct.
- Exemple concret issu du projet :

```[lang]
# Exemple pratique prêt à tester
```

<!-- Note: Voici la syntaxe de base et un exemple concret prêt à être exécuté. -->

---

## 6. Travail Pratique (TP)
- **Consigne** : ...
- **Étapes à réaliser** :
  1. ...
  2. ...
  3. ...

<!-- Note: À présent, vous appliquez les consignes pas-à-pas pour réaliser l'exercice. -->

---

## 6. Critères d'évaluation
- **Grille de notation (Total : 20 points)** :
  - Structure du document : 4 points
  - Maîtrise des éléments techniques : 8 points
  - Intégration des données du projet : 4 points
  - Qualité du français A1 : 4 points

<!-- Note: La notation évalue la structure, la technique, les données et la clarté du français. -->

---

## 6. Conclusion
- **Compétence acquise** : ...
- **Livrable attendu** : `labs/<lab-slug>/presentation.md`

<!-- Note: En conclusion, nous avons validé la compétence pratique et le livrable attendu. -->
```

---

## 5. Pre-Publication Quality Checklist

Before completing any Lab creation task, verify:

- [ ] Folder is located in `labs/<lab-slug>/` with a clean, safe slug.
- [ ] No existing directories or files were overwritten or deleted without permission.
- [ ] Exactly one generated content file exists: `presentation.md` (no auxiliary files unless explicitly requested).
- [ ] File begins with valid Marp frontmatter: `---` / `marp: true` / `---`.
- [ ] **Title Slide Logos**: Both OFPPT and SoliCode logos are placed cleanly at the top with proportional dimensions, referencing local files via correct relative paths.
- [ ] **Logos Integrity**: Official logos preserved in the images directory; none deleted, replaced, or invented (if missing, absence was flagged).
- [ ] **Mandatory Mentions**: Title slide includes the title, `- **Présenté par** : Oumaima Mahfoud` and `- **Encadré par** : ES-SARRAJ FOUAD`.
- [ ] Language level is strictly **Français A1** (simple words, short sentences).
- [ ] **Speaker Notes (Speech Oral)** : Chaque slide contient obligatoirement un commentaire de présentation (`<!-- Note: ... -->`) formé d'**une seule phrase courte en Français A1** (le speech oral pour expliquer la slide).
- [ ] All 6 mandatory sections are included in sequence: Planification, Introduction, Définitions, Outils, Partie théorique, Conclusion.
- [ ] Dedicated slides for **Travail Pratique (TP)** and **Critères d'évaluation** are present.
- [ ] Slides are separated by `---` and kept minimal, readable, and ready to present.
- [ ] Complete draft was displayed in conversation and explicit user approval was obtained before saving.
- [ ] Saved file and Marp rendering were inspected and verified via available filesystem tools.
