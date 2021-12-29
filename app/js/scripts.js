// * Alerta para dar avisos en la página
// window.onload = () => {
//     alert("12/29/21: Por lo pronto, esta página se visualiza correctamente en Firefox");
// }

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

// Prevenir window.open()
// var newWindow = window.open();
// newWindow.opener = null;
