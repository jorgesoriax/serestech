const prodPreview = document.querySelector('#img--prod-preview');
let prodPreviewImg = document.querySelector('#img--prod-preview').querySelector('img');
const prodMiniature = document.querySelectorAll('.img--miniature');
const prodPreviewZoom = document.querySelector('#zoom');


// * SIMULACIÓN DE PREVIEW IMG
// Esta  funcón hace una simulación de url, lo que significa que esta url no es permanente,
// más adelante será reemplazada cuando las imagenes sean cargadas de otras forma...
for(let i = 0; i < prodMiniature.length; i++){

    prodMiniature[i].addEventListener('click', () => {
        // prodPreview.style.backgroundImage = `img/products/product-page/prod-page-${i + 1}.webp`;
        
        prodPreviewImg.src = `img/products/product-page/prod-page-${i + 1}.webp`;

        prodPreviewZoom.style.backgroundImage = `url(img/products/product-page/prod-page-${i + 1}.webp)`;
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