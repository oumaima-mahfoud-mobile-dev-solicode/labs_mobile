---
name: veille-technologique
description: Crée des veilles technologiques courtes en français avec une présentation Marp et une documentation simple. À utiliser pour découvrir une technologie, un outil ou une nouveauté du développement web.
---

# Skill : Veille technologique

## Objectif
Créer une veille technologique courte, claire et adaptée au niveau 1A.

## Déclencheurs
Utiliser cette skill lorsque l'utilisateur demande une veille technologique ou souhaite découvrir une nouveauté technique.

## Workflow
1. Identifier le sujet et rechercher des informations fiables et récentes.
2. Sélectionner uniquement les informations essentielles.
3. Créer le dossier `labs/veille-technologique/<sujet>/`.
4. Générer `presentation.md` au format Marp.
5. Générer `README.md` comme documentation courte.
6. Vérifier les deux fichiers avant de terminer.

## Présentation Marp
- Utiliser `marp: true` dans le frontmatter.
- **Règle obligatoire pour chaque page de garde Marp** :
  - Afficher le logo OFPPT et le logo SoliCode.
  - Conserver les deux logos dans un dossier d’images du projet, si les fichiers existent déjà.
  - Utiliser les images locales avec des chemins relatifs corrects.
  - Placer les deux logos proprement en haut de la page de garde, avec des dimensions proportionnées (ex : conteneur `<div class="logo-bar">`, hauteur ~85-110px).
  - Toujours afficher le titre du sujet, « Présenté par : Oumaima Mahfoud » et « Encadré par : ES-SARRAJ FOUAD ».
  - Ne pas supprimer, remplacer ou inventer les logos officiels.
  - Si un logo est absent, signaler son absence et demander le fichier nécessaire.
- Toujours respecter ce plan :
  1. Plan
  2. Introduction
  3. Problématique
  4. Pratique
  5. Conclusion
- Présentation courte : 5 à 6 slides maximum.
- Français simple, niveau 1A.
- **Commentaire de présentation obligatoire** : Sur chaque slide, ajouter un commentaire (`<!-- Note: ... -->`) formé d'une seule phrase courte en Français A1 (speech oral pour expliquer la slide).
- Utiliser des phrases courtes, des listes et des exemples concrets.
- Ajouter une source fiable pour les informations récentes.
- Adapter le design au sujet tout en gardant une présentation professionnelle.
- Ne pas ajouter de longues explications ni de slides inutiles.
- Vérifier le rendu Marp avant de terminer.

## Documentation README.md
Inclure uniquement :
- Définition du sujet.
- Points essentiels.
- Exemple pratique.
- Sources utiles.

La documentation doit être courte, claire et en français simple.

## Règles
- Ne pas inventer de nouveautés ou de sources.
- Ne pas modifier les autres fichiers du projet.
- Ne pas créer de fichiers supplémentaires sans demande.
- Si le sujet est trop vague, demander une précision.
- Après création, indiquer uniquement les fichiers créés et les éventuels problèmes détectés.

## Vérification
Vérifier le plan, le français, la présence des informations essentielles, l'intégration correcte des logos et mentions sur la page de garde, la syntaxe et le rendu Marp, ainsi que la cohérence des sources.

