---
name: creator-readme
description: Crée ou adapte le README d'un lab selon son contexte, ses objectifs et ses exercices vérifiés. À utiliser pour documenter un lab dans labs/.
---

# Création de README de lab

Cette skill aide à rédiger un README clair et fidèle au contenu d'un lab. Elle reprend la structure de README existants, sans ajouter de faits non confirmés.

## Quand l'utiliser / ne pas l'utiliser

- Utiliser : création ou mise à jour du README d'un lab dans `labs/<lab-slug>/`.
- Ne pas utiliser : création d'une présentation Marp seule ; utiliser alors [lab-creator](../../labs-creator/lab-creator.md).
- Si la demande porte sur le README et la présentation, utiliser cette skill et [lab-creator](../../labs-creator/lab-creator.md).

## Entrées nécessaires

- Le nom et le dossier du lab ; conserver le slug existant.
- Le README existant, s'il y en a un.
- Les sources du projet : code, exercices, commandes, versions et objectifs.
- Les problèmes et solutions réels, si le README doit les décrire.

## Structure recommandée

Adapter les sections aux informations disponibles. Ne pas ajouter de section vide ou non pertinente.

1. Besoin ou contexte du projet technique
2. Notions et techniques à apprendre
3. Réalisation attendue et exercices
4. Structure du projet, si elle est utile et vérifiée
5. Installation et exécution, avec commandes vérifiées
6. Résultat attendu, livrable et informations, si ces éléments sont fournis

La structure peut rester courte, comme dans [le README de lab-php](../../../../labs/lab-php/README.md), ou être détaillée selon le besoin. Garder une conclusion seulement si elle apporte une synthèse utile et cohérente avec le README existant.

## Règles de rédaction

- Rédiger en français simple et avec des phrases courtes.
- Garder les noms, versions, commandes, chemins et concepts exacts.
- Décrire uniquement les objectifs, exercices et résultats présents dans les sources.
- Ne jamais inventer un problème, une solution, une fonctionnalité ou un résultat.
- Séparer les faits confirmés des éléments à compléter.
- Vérifier les commandes et versions dans le projet avant de les documenter.
- Ne pas recopier le plan détaillé de la présentation dans le README.
- Ne modifier que le README demandé ; ne pas créer de présentation ou de fichiers annexes sans demande.
- Si le README cible existe, le lire et le préserver ; demander avant de le remplacer entièrement.

## Workflow

1. Lire le README et les fichiers du lab nécessaires à la demande.
2. Repérer le contexte, les objectifs, les exercices, les commandes et les résultats confirmés.
3. Choisir les sections utiles dans la structure recommandée.
4. Présenter le brouillon et le chemin cible à l'utilisateur.
5. Attendre son accord avant d'écrire.
6. Modifier ou créer uniquement le README approuvé.
7. Relire le fichier et vérifier les liens, commandes, versions et fidélité aux sources.

## Lien avec la création de lab

Pour créer ou adapter une présentation à partir du README, appliquer aussi [lab-creator](../../labs-creator/lab-creator.md). Le README documente le lab ; la présentation transforme ses informations en diapositives et suit les règles propres à `lab-creator`.

## Vérification

- Le titre et le slug correspondent au lab.
- Chaque section est pertinente et s'appuie sur des sources disponibles.
- Les commandes, versions, chemins et liens sont exacts.
- Aucun problème, solution ou résultat n'a été inventé.
- Le plan de présentation n'est pas dupliqué dans le README.
- Seul le fichier README demandé a été modifié.
