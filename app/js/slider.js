const slider = document.querySelector('#slider');
let sliderSection = document.querySelectorAll('.slider--section');
let sliderSectionLast = sliderSection[sliderSection.length -1] // Obtener último section

// Esta variable no permiten la ejecución de una nueva instrucción
// hasta que no termine la anterior, 
// resuelve el problema de interrupción de instrucciones
let sliderState = 0;

const buttonR = document.querySelector('#button--r');
const buttonL = document.querySelector('#button--l');

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function slideToRight(){
    // Condicionar la ejecución del bloque de instrucciones
    if(sliderState == 0){
        let sliderSectionFirst = document.querySelectorAll('.slider--section')[0];

        slider.style.marginLeft = '-200%';
        slider.style.transition = 'all 0.5s';

        setTimeout(function(){
            slider.style.transition = 'none';
            slider.insertAdjacentElement('beforeend', sliderSectionFirst);
            slider.style.marginLeft = '-100%';

            // Reiniciar variable despues de 500 ms
            sliderState = 0;
        }, 500)

    }
    // Cambio del valor de la variable
    sliderState = 1;
}
function slideToLeft(){
    if(sliderState == 0){
        let sliderSection = document.querySelectorAll('.slider--section');
        let sliderSectionLast = sliderSection[sliderSection.length -1]
    
        slider.style.marginLeft = '0';
        slider.style.transition = 'all 0.5s';
    
        setTimeout(function(){
            slider.style.transition = 'none';
            slider.insertAdjacentElement('afterbegin', sliderSectionLast);
            slider.style.marginLeft = '-100%';
    
            sliderState = 0;
        }, 500)
    }
    sliderState = 1;
}

buttonR.addEventListener('click', () => slideToRight());
buttonL.addEventListener('click', () => slideToLeft());

setInterval(() => {
    slideToRight();
}, 3000);