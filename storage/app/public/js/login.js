const checkmark = document.querySelector('.checkbox'),
      checkboxInput = checkmark.querySelector('input');

// * PASSWORD HIDE & SHOW
// Mostramos y ocultamos la contraseña en login
const showHiddenPass = (inputPass, iconPass) => {
    const input = document.getElementById(inputPass),
          icon = document.getElementById(iconPass)

    icon.addEventListener('click', () => {
        if(input.type === 'password'){
            input.type = 'text';

            icon.classList.add('bxs-show');
        } else {
            input.type = 'password';

            icon.classList.remove('bxs-show');
        }
    })
}

showHiddenPass('input--pass','icon--pass');

// * CHECKBOX MASK
// Interactuamos con el elemento que sustituye al checkbox original
// cuando presionamos la tecla enter o space
checkmark.addEventListener('keydown', (e) => {
    if(e.keyCode === 32 || 13){
        if(checkboxInput.checked){
            checkboxInput.checked = false;
        } else {
            checkboxInput.checked = true;
        }
    }
});