const slider = document.querySelector(".slider-container"),
    slides = Array.from(document.querySelectorAll(".slide")),
    countElement = document.querySelector(".count"),
    btnSliderPrev = document.querySelector('.touch-slider .prev-button'),
    btnSliderNext = document.querySelector('.touch-slider .next-button');

let isDragging = false,
    startPos = 0,
    currentTranslate = 0,
    prevTranslate = 0,
    animationID = 0,
    currentIndex = 0, // Slide actual
    count = 1;

// Iniciamos contador de Index
if (slides.length > 0) {
    countElement.textContent = `${count} / ${slides.length}`;
} else {
    // Igualamos count a 0
    countElement.textContent = `${count - 1} / ${slides.length}`;

    // Rellenamos el slider vacío con una imagen referencial
    const sliderEmpty = document.createElement("img");

    slider.style.display = "flex";
    slider.style.alignItems = "center";
    slider.style.justifyContent = "center";

    sliderEmpty.src = "storage/images/icons/noimage_200.png";
    sliderEmpty.classList.add("noimage-200");
    slider.appendChild(sliderEmpty);
}

slides.forEach((slide, index) => {
    const slideImage = slide.querySelector("img");

    // Prevenimos la interacción al arrastrar la imagen
    slideImage.addEventListener("dragstart", (e) => e.preventDefault());

    // Touch events
    slide.addEventListener("touchstart", touchStart(index));
    slide.addEventListener("touchend", touchEnd);
    slide.addEventListener("touchmove", touchMove);

    // Mouse events
    slide.addEventListener("mousedown", touchStart(index));
    slide.addEventListener("mouseup", touchEnd);
    slide.addEventListener("mousemove", touchMove);
    slide.addEventListener("mouseleave", touchEnd);

    btnSliderNext.addEventListener("click", simpleSlideNext);
    btnSliderPrev.addEventListener("click", simpleSlidePrev);
    
});
function simpleSlideNext(){
    if (currentIndex < slides.length - 1) {
        currentIndex += 1;

        if (count < slides.length) {
            count += 1;
            countElement.textContent = `${count} / ${slides.length}`;
        }
    }
    setPositionByIndex();
}
function simpleSlidePrev(){
    if (currentIndex > 0) {
        currentIndex -= 1;

        if (count != 1) {
            count -= 1;
            countElement.textContent = `${count} / ${slides.length}`;
        }
    }
    setPositionByIndex();
}

// Desactivamos context menu
slider.oncontextmenu = function (event) {
    event.preventDefault();
    event.stopPropagation();
    return false;
};

function touchStart(index) {
    return function (event) {
        currentIndex = index;
        // Recuperamos la posición de X
        startPos = getPositionX(event);
        isDragging = true;
        animationID = requestAnimationFrame(animation);
        slider.classList.add("grabbing");
        slider.style.cursor = 'grabbing';
    };
}

function touchEnd() {
    isDragging = false;
    cancelAnimationFrame(animationID);
    slider.style.cursor = 'grab';

    const movedBy = currentTranslate - prevTranslate;

    if (movedBy < -100 && currentIndex < slides.length - 1) {
        currentIndex += 1;

        // Avanzamos la posición del Index
        if (count < slides.length) {
            count += 1;
            countElement.textContent = `${count} / ${slides.length}`;
        }
    }

    if (movedBy > 100 && currentIndex > 0) {
        currentIndex -= 1;

        // Retrocedemos la posición del Index
        if (count != 1) {
            count -= 1;
            countElement.textContent = `${count} / ${slides.length}`;
        }
    }

    setPositionByIndex();

    slider.classList.remove("grabbing");
}

function touchMove(event) {
    if (isDragging) {
        const currentPosition = getPositionX(event);
        currentTranslate = prevTranslate + currentPosition - startPos;
    }
}

function getPositionX(event) {
    // Verificamos si el usuario esta usando mouse
    return event.type.includes("mouse")
        ? event.pageX
        : event.touches[0].clientX;
}

function animation() {
    setSliderPosition();
    if (isDragging) {
        requestAnimationFrame(animation);
    }
}

function setSliderPosition() {
    slider.style.transform = `translateX(${currentTranslate}px)`;
}

function setPositionByIndex() {
    currentTranslate = currentIndex * -window.innerWidth;
    prevTranslate = currentTranslate;
    setSliderPosition();
}
