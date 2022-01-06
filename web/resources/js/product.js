const prodPreview = document.querySelector('#img--prod-preview');
let prodPreviewImg = document.querySelector('#img-original')
const prodMiniature = document.querySelectorAll('.img--miniature');
const prodPreviewZoom = document.querySelector('#zoom');
const prodDetails = document.querySelector('#container--dets');


// * SIMULACIÓN DE PREVIEW IMG
// Esta  funcón hace una simulación de url, lo que significa que esta url no es permanente,
// más adelante será reemplazada cuando las imagenes sean cargadas de otras forma...
for(let i = 0; i < prodMiniature.length; i++){

    prodMiniature[i].addEventListener('click', () => {
        // prodPreview.style.backgroundImage = `../resources/img/products/product-page/prod-page-${i + 1}.webp`;
        
        prodPreviewImg.src = `../resources/img/products/product-page/prod-page-${i + 1}.webp`;

        prodPreviewZoom.style.backgroundImage = `url(../resources/img/products/product-page/prod-page-${i + 1}.webp)`;
    })

}
// TODO Buscar alternativa para reemplazar una url explícita por un método dinámico
// TODO Probar con document.createElement('')

// * ZOOM
// https://codepen.io/kennethknudsen/pen/eGQKZX
function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX;
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX;

  x = offsetX / zoomer.offsetWidth * 100;
  y = offsetY / zoomer.offsetHeight * 100;

  prodPreviewZoom.style.backgroundPosition = x + '% ' + y + '%';
}

prodPreviewImg.addEventListener('mouseover', () => {
  prodPreviewZoom.style.visibility = 'visible';
  prodDetails.style.visibility = 'hidden';
});
prodPreviewImg.addEventListener('mouseout', () => {
  prodPreviewZoom.style.visibility = 'hidden';
  prodDetails.style.visibility = 'visible';

});