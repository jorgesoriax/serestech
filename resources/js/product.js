const productPreviewImg = document.querySelector("#img-original");
const productMiniature = document.querySelectorAll(".img--miniature");
const productPreviewZoom = document.querySelector("#zoom");
const productDetails = document.querySelector("#container--dets");

zoom();
selectionImages();
elementOverlap();

// * SELECCIÓN DE IMAGEN A INSPECCIONAR
//   Selecciona una imagen de la lista y sustituye las urls
//   de los elementos productPreviewZoom y productPreviewImg
function selectionImages() {
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

// * ZOOM
// https:codepen.io/kennethknudsen/pen/eGQKZX
function zoom() {
    // Imagen por default para vista previa
    productPreviewZoom.style.backgroundImage = `url(${
        productMiniature[0].querySelector("img").src
    })`;
    // Zoom
    productPreviewImg.addEventListener("mousemove", (e) => {
        var zoomer = e.currentTarget;
        e.offsetX ? (offsetX = e.offsetX) : (offsetX = e.touches[0].pageX);
        e.offsetY ? (offsetY = e.offsetY) : (offsetX = e.touches[0].pageX);

        x = (offsetX / zoomer.offsetWidth) * 100;
        y = (offsetY / zoomer.offsetHeight) * 100;

        productPreviewZoom.style.backgroundPosition = x + "% " + y + "%";
    });
}

// * Corrección estética para elementos solapados
//   Cuando el elemento productPreviewZoom se muestra,
//   las características principales se ocultan y viceversa
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
