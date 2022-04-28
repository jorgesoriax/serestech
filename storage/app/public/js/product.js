const productPreviewImg = document.querySelector("#img-original"),
      productMiniature = document.querySelectorAll(".img--miniature"),
      productPreviewZoom = document.querySelector("#zoom"),
      productDetails = document.querySelector("#container--dets"),
      btnScrollTop = document.querySelector('.scrollTop');

if(productMiniature.length !== 0){ 
    zoom() 
    elementOverlap();
}
selectionImages();
window.onscroll = function(){scrollHeight()}
scrollToTop();

/**
  * * SELECCIÓN DE IMAGEN A INSPECCIONAR
  * Selecciona una imagen de la lista y sustituye las urls
  * de los elementos productPreviewZoom y productPreviewImg
  */
function selectionImages() {
    // Comprobamos si existe una colección, si es así 
    // asignamos la primera imagen de la colección
    // si no, asignamos una imagen default con una class y un cursor default
    if(productMiniature.length !== 0){
        productPreviewImg.src = productMiniature[0].querySelector('img').src
    } else {
        productPreviewImg.src = 'storage/images/icons/noimage_75.png'
        productPreviewImg.classList.add('noimage-75')
        productPreviewImg.style.cursor = 'default';
    }

    // Recorremos la lista de imagenes disponibles
    for (i = 1; i <= productMiniature.length; i++) {
        // Recuperamos la url de cada una
        let selectedImage = productMiniature[i - 1].querySelector("img").src;

        // Asignamos un evento para cada elemento contenedor en la lista de imagenes
        productMiniature[i - 1].addEventListener("mousemove", () => {
            // Cambiamos las urls por la de la imagen seleccionada
            productPreviewZoom.style.backgroundImage = `url(${selectedImage})`;
            productPreviewImg.src = `${selectedImage}`;
        });
    }
}

/**
  * * ZOOM
  * https:codepen.io/kennethknudsen/pen/eGQKZX
  */
function zoom() {
    // Imagen por default para vista previa
    productPreviewZoom.style.backgroundImage = `url(${ productMiniature[0].querySelector("img").src})`;
    // Zoom
    productPreviewImg.addEventListener("mousemove", (e) => {
        var zoomer = e.currentTarget;
        // e.offsetX ? (offsetX = e.offsetX) : (offsetX = e.touches[0].pageX);
        // e.offsetY ? (offsetY = e.offsetY) : (offsetY = e.touches[0].pageY);

        offsetX = e.offsetX;
        offsetY = e.offsetY;

        x = (offsetX / zoomer.offsetWidth) * 100;
        y = (offsetY / zoomer.offsetHeight) * 100;

        productPreviewZoom.style.backgroundPosition = x + "% " + y + "%";
    });
}

/**
  * * Corrección estética para elementos solapados
  * Cuando el elemento productPreviewZoom se muestra,
  * las características principales se ocultan y viceversa
  */
function elementOverlap() {
    productPreviewImg.addEventListener("mouseover", () => {
        productPreviewZoom.style.visibility = "visible";
        productDetails.style.visibility = "hidden";
    });
    productPreviewImg.addEventListener("mouseout", () => {
        productPreviewZoom.style.visibility = "hidden";
        productDetails.style.visibility = "visible";
    });
}
/**
  * * SCROLL TO TOP
  */
function scrollHeight(){
    if(document.body.scrollTop > 350 || document.documentElement.scrollTop > 350){
        btnScrollTop.style.display = 'block';
    } else {
        btnScrollTop.style.display = 'none';
    }
}
function scrollToTop(){
    btnScrollTop.addEventListener('click', () => {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    })
}