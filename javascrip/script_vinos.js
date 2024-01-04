var slideIndex = 0;
var slides = [
    { src: "imagenes/vinos/Castigo_del_Mango.png", text: "CASTILLO DEL MAGO $800.00 C/D " },
    { src: "imagenes/vinos/Cuatro_Soles.jpg", text: "CUATRO SOLES $300.00 C/D" },
    { src: "imagenes/vinos/Donato.png", text: "DONATO $560.00 C/D" },
    { src: "imagenes/vinos/gato_negro.png", text: "GATO NEGRO $160.00 C/D" },
    { src: "imagenes/vinos/Mil_vientos.png", text: "MIL VIENTOS $600.00 C/D" },
    { src: "imagenes/vinos/Riunite.png", text: "RIUNITE $170.00 C/D" }
];

function showSlide() {
    var carouselContainer = document.querySelector('.carousel-container');
    carouselContainer.innerHTML = '';

    var img = document.createElement('img');
    img.src = slides[slideIndex].src;
    img.alt = "Imagen " + (slideIndex + 1);
    img.classList.add('image');
    carouselContainer.appendChild(img);

    // Agrega el overlay con el texto para la imagen actual
    var overlay = document.createElement('div');
    overlay.classList.add('overlay');
    var text = document.createElement('div');
    text.classList.add('text');
    text.textContent = slides[slideIndex].text;
    overlay.appendChild(text);
    carouselContainer.appendChild(overlay);
}

function changeSlide(n) {
    slideIndex += n;

    // Vuelve al primer slide si llega al final
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    // Vuelve al último slide si se retrocede desde el primero
    else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    showSlide();
}

showSlide();
