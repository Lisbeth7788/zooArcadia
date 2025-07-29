// On selectionne le bouton 
const button = document.querySelector('.button');

//On ajoute un écouteur d'événement au bouton
button.addEventListener('click', () => {

// On modifie le texte du bouton
    button.textContent = 'Valeur saisie : ' + value;
})
