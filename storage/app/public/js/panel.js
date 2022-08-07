/*
|--------------------------------------------------------------------------
| Funciones disponibles para vista panel
|--------------------------------------------------------------------------
*/

const frases = ['Bienvenido', 'Hola de nuevo', 'Buen día', 'Comencemos'],
      emojis = ['👋', '👀', '💻', '🕓'],
      F = frases.length,
      msgWelcome = document.getElementById("bienvenida"),
      emoji = document.getElementById("emoji");

const btnCreate = document.querySelectorAll('.btn-create'),
      btnShow = document.querySelectorAll('.btn-show'),
      linkShow = document.querySelectorAll('.img-container'),
      btnEdit = document.querySelectorAll('.btn-edit'),
      btnDelete = document.querySelectorAll('.btn-delete'),
      shadowModal = document.querySelector('.modal-shadow--panel'),
      modalContainer = document.querySelector('.modal-container'),
      navSlider = document.querySelectorAll('#slider');

const buttonsCollection = [btnCreate, btnShow, linkShow, btnEdit, btnDelete, navSlider];

showPhrases();
for(i = 0; i < buttonsCollection.length; i++){ viewModal(buttonsCollection[i]) };

function showPhrases() {
    let numAleatorio = Math.round(Math.random() * (F-1));
    msgWelcome.innerHTML = frases[numAleatorio];
    emoji.innerHTML = emojis[numAleatorio];
}
/**
 * * VIEW MODAL
 * Muestra el modal
 */
function viewModal(buttons){
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            shadowModal.style.display = 'block';
            modalContainer.style.display = 'block';
            document.body.style.overflowY = 'hidden';
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        })
    });
};