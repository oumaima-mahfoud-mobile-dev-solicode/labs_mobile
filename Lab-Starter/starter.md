---
marp: true
theme: default
paginate: true
---

# Lab-Starter 2
## Préparer l’environnement de développement

**Objectif :** Installer, configurer et vérifier l’environnement de développement Web sous Windows.

Présenté par : Oumaima Mahfoud  
SOLICODE

---

# 1. Planification

- Introduction
- Problématique
- Installation des outils
- Configuration de l’environnement
- Résolution des problèmes rencontrés
- Vérification et conclusion

---

# 2. Introduction

Un environnement de développement regroupe les logiciels et les outils nécessaires pour créer, tester et gérer des applications.

Pour le développement Web, nous utilisons notamment Visual Studio Code, Git, Node.js et PHP.

---

# 3. Problématique

Lors de la préparation de l’environnement, plusieurs difficultés ont été rencontrées :

- Les extensions des fichiers étaient masquées dans Windows, ce qui compliquait l'identification des types de fichiers.
- Les fichiers et dossiers cachés de Git, notamment `.git`, n’étaient pas visibles.
- La commande `git init` seule ne permettait pas de connecter le dépôt local à GitHub.
- L’extension Todo  devait être ajoutée pour faciliter le repérage des commentaires `TODO` et `FIXME`.


---

# 4. Installation de Visual Studio Code

Visual Studio Code est un éditeur de code utilisé pour développer des applications Web.

**Étapes :**

1. Télécharger VS Code depuis le site officiel.
2. Lancer le fichier d’installation.
3. Accepter les conditions d’utilisation.
4. Terminer l’installation.
5. Ouvrir Visual Studio Code.

Site officiel : https://code.visualstudio.com/

---

# 5. Installation de Git

Git est un système de gestion de versions qui permet de suivre les modifications du code.

**Étapes :**

1. Télécharger Git pour Windows.
2. Installer Git.
3. Ouvrir PowerShell.
4. Vérifier l’installation.

```bash
git --version
```

Site officiel : https://git-scm.com/

---

# 6. Installation de Node.js et PHP

## Node.js et npm

Node.js permet d’exécuter JavaScript en dehors du navigateur. npm permet de gérer les packages JavaScript.

```bash
node -v
npm -v
```

Téléchargement : https://nodejs.org/

## PHP

PHP est un langage utilisé pour développer des applications Web côté serveur.

XAMPP fournit notamment PHP, Apache et MariaDB.

```bash
php -v
```

Téléchargement : https://www.apachefriends.org/

*Remarque : si PHP n’est pas reconnu, il faut vérifier sa configuration dans la variable d’environnement PATH.*

---

# 7. Configuration de Windows

## Afficher les extensions des fichiers

**Problème :** Windows masquait les extensions, ce qui rendait difficile la distinction entre les fichiers `.html`, `.css`, `.js` et `.php`.

**Solution :**

1. Ouvrir l’Explorateur de fichiers.
2. Cliquer sur **Affichage**.
3. Ouvrir **Afficher**.
4. Activer **Extensions de noms de fichiers**.

Cette configuration permet d’identifier facilement le type de chaque fichier.

---

# 8. Afficher les fichiers cachés de Git

**Problème :** Le dossier `.git` était invisible dans l’Explorateur de fichiers.

**Explication :** Git utilise le dossier caché `.git` pour stocker les informations nécessaires au suivi des versions.

**Solution :**

1. Ouvrir l’Explorateur de fichiers.
2. Aller dans **Affichage → Afficher**.
3. Activer **Éléments masqués**.

**Vérification :**

Après l’exécution de `git init` dans un projet, le dossier `.git` est créé automatiquement.

*Attention : ne pas supprimer ni modifier manuellement le contenu de ce dossier.*

---

# 9. Configuration des extensions de VS Code

Les extensions permettent d’ajouter des fonctionnalités à Visual Studio Code.

**Extensions utilisées :**

- **Live Server** : lancement local des pages HTML.
- **TODO Highlight** : repérage des commentaires `TODO` et `FIXME`.


**Installation :**

1. Ouvrir VS Code.
2. Cliquer sur l’onglet Extensions.
3. Rechercher le nom de l’extension.
4. Cliquer sur Installer.

---

# 10. Initialisation d’un dépôt Git

**Problème :** L’exécution de `git init` crée un dépôt local, mais ne le connecte pas automatiquement à GitHub.

**Étapes :**

Créer un dossier de projet, puis l’ouvrir dans VS Code.

```bash
git init
git status
```

Configurer l’identité Git si nécessaire :

```bash
git config --global user.name "Votre nom"
git config --global user.email "votre@email.com"
```

Créer ensuite un fichier `.gitignore` si nécessaire pour exclure les fichiers qui ne doivent pas être suivis.

**Résultat :** Le projet est initialisé localement et prêt à être versionné.

---

# 11. Connecter le dépôt local à GitHub

**Étapes :**

1. Créer un nouveau dépôt sur GitHub.
2. Copier son URL.
3. Ajouter les fichiers au suivi Git.
4. Créer le premier commit.
5. Relier le dépôt local au dépôt distant.
6. Envoyer les modifications sur GitHub.

```bash
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin URL_DU_DEPOT
git push -u origin main
```

Remplacer `URL_DU_DEPOT` par l’URL réelle du dépôt GitHub.

**Résultat :** Le code local est envoyé sur GitHub.

*Remarque : si un dépôt distant existe déjà, vérifier avec `git remote -v` avant d’ajouter un nouveau remote.*

---

# 12. Organisation du projet

Exemple d’organisation d’un projet Web :

```text
MonProjet/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── script.js
├── .gitignore
└── README.md
```

Pour ouvrir le dossier dans VS Code :

```bash
code .
```

Cette organisation facilite la gestion des fichiers et la collaboration.

---

# 13. Vérification de l’environnement

Ouvrir PowerShell et exécuter les commandes suivantes :

```bash
git --version
node -v
npm -v
php -v
code --version
```

Vérifier également :

- La visibilité des extensions des fichiers.
- L’affichage des éléments masqués.
- La présence du dossier `.git`.
- L’installation de TODO Highlighte.
- La connexion du dépôt local à GitHub.

---

# Conclusion


**Un environnement bien configuré constitue une base essentielle pour développer, organiser et versionner des projets Web efficacement.**