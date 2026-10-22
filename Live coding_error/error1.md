---
marp: true
---

marp true theme default paginate true
LAB — Debug JavaScript
Read → Find → Fix → Test
Challenge 01
main.js25

Uncaught TypeError
form.addEventListener is not a function
Mission  Trouver la cause et corriger le code.

Inspecter le code
const form =
  document.getElementsByClassName(form);

form.addEventListener(submit, (e) = {
  e.preventDefault();
  console.log(Submitted);
});
Question  Quel est le problème 

Lire l'erreur
main.js25
→ Fichier  main.js

→ Ligne  25

addEventListener is not a function
→ form n'est pas un élément DOM unique.

Fix
const form =
  document.querySelector(.form);

form.addEventListener(submit, (e) = {
  e.preventDefault();
  console.log(Submitted);
});
Test
console.log(form);
console.log(form instanceof HTMLFormElement);
Résultat attendu 

form class=form...form
true
Challenge 02
const button = document.getElementById(save);

button.addEventListener(click, () = {
  console.log(Saved);
});
HTML 

button id=submitSavebutton
Mission  Corriger le bug sans modifier le JavaScript.