// * Alerta para dar avisos en la página
// window.onload = () => {
//     alert('JS importado correctamente');
// };

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

const checkmark = document.querySelector('.checkbox');
const checkboxInput = checkmark.querySelector('input'); 

checkmark.addEventListener('keydown', (e) => {
    if(e.keyCode === 13){
        if(checkboxInput.checked){
            checkboxInput.checked = false;
        } else {
            checkboxInput.checked = true;
        }
    }
})