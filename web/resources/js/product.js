const prodPreviewImg = document.querySelector("#img-original");
const prodMiniature = document.querySelectorAll(".img--miniature");
const prodPreviewZoom = document.querySelector("#zoom");
const prodDetails = document.querySelector("#container--dets");

zoom();
selectionImages();
elementOverlap();

// * SELECCIÓN DE IMAGEN A INSPECCIONAR
//   Selecciona una imagen de la lista y sustituye las urls
//   de los elementos prodPreviewZoom y prodPreviewImg
function selectionImages() {
    // Recorremos la lista de imagenes disponibles
    for (i = 1; i <= prodMiniature.length; i++) {
        // Recuperamos la url de cada una
        let selectedImage = prodMiniature[i - 1].querySelector("img").src;

        // Asignamos un evento para cada elemento contenedor en la lista de imagenes
        prodMiniature[i - 1].addEventListener("click", () => {
            // Cambiamos las urls por la de la imagen seleccionada
            prodPreviewZoom.style.backgroundImage = `url(${selectedImage})`;
            prodPreviewImg.src = `${selectedImage}`;
        });
    }
}

// * ZOOM
// https:codepen.io/kennethknudsen/pen/eGQKZX
function zoom() {
    // Imagen por default para vista previa
    prodPreviewZoom.style.backgroundImage = `url(${
        prodMiniature[0].querySelector("img").src
    })`;
    // Zoom
    prodPreviewImg.addEventListener("mousemove", (e) => {
        var zoomer = e.currentTarget;
        e.offsetX ? (offsetX = e.offsetX) : (offsetX = e.touches[0].pageX);
        e.offsetY ? (offsetY = e.offsetY) : (offsetX = e.touches[0].pageX);

        x = (offsetX / zoomer.offsetWidth) * 100;
        y = (offsetY / zoomer.offsetHeight) * 100;

        prodPreviewZoom.style.backgroundPosition = x + "% " + y + "%";
    });
}

// * Corrección estética para elementos solapados
//   Cuando el elemento prodPreviewZoom se muestra,
//   las características principales se ocultan y viceversa
function elementOverlap() {
    prodPreviewImg.addEventListener("mouseover", () => {
        prodPreviewZoom.style.visibility = "visible";
        prodDetails.style.visibility = "hidden";
    });
    prodPreviewImg.addEventListener("mouseout", () => {
        prodPreviewZoom.style.visibility = "hidden";
        prodDetails.style.visibility = "visible";
    });
}
