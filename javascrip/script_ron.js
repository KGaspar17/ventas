var slideIndex = 0;
var slides = [
    { src: "imagenes/ron/caldas.webp", text: "RON CALDAS $550.00 C/D" },
    { src: "imagenes/ron/captain-morgan.jpg", text: "RON CAPITAN MORGAN $190.00 C/D" },
    { src: "imagenes/ron/kraken.jpg", text: "RON KRAKEN $210.00 C/D " },
    { src: "imagenes/ron/la-gloria.png", text: "RON LA GLORIA $492.00 C/D" },
    { src: "imagenes/ron/orava.webp", text: "RON ORAVA $1685.00 C/D" },
    { src: "imagenes/ron/ron bacardi blanco.png", text: "RON BACARDI BLANCO $300.00 C/D" }
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
