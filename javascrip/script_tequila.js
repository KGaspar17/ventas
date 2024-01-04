var slideIndex = 0;
var slides = [
    { src: "imagenes/tequila/1800-blanco.png", text: "1800 BLANCO $584.00 C/D" },
    { src: "imagenes/tequila/1800-cristalino.png", text: "1800 CRISTALINO $855.00 C/D" },
    { src: "imagenes/tequila/1800-reposado.webp", text: "1800 REPOSADO $600.00 C/D" },
    { src: "imagenes/tequila/azul-mango.webp", text: "AZUL BABY MANGO $240.00 C/D" },
    { src: "imagenes/tequila/azul.png", text: "GRAN CENTENARIO AZUL $280.00 C/D" },
    { src: "imagenes/tequila/añejo-donJulio.webp", text: "DON JULIO AÑEJO $965.00 C/D" },
    { src: "imagenes/tequila/cabrito.png", text: "CABRITO $240.00 C/D" },
    { src: "imagenes/tequila/centenario.webp", text: "CENTENARIO $365.00 C/D" },
    { src: "imagenes/tequila/DonJulio-70.png", text: "DON JULIO 70 $1,000.00 C/D" },
    { src: "imagenes/tequila/DonJulio.png", text: "DON JULIO $680.00 C/D" },
    { src: "imagenes/tequila/herradura-plata.webp", text: "HERRADURA PLATA $590.00 C/D" },
    { src: "imagenes/tequila/hornitos.webp", text: "HORNITOS $450.00 C/D" },
    { src: "imagenes/tequila/jose-cuervo-especial.png", text: "JOSE CUERVO ESPECIAL $240.00 C/D" },
    { src: "imagenes/tequila/jose-cuervo-tradicional.png", text: "JOSE CUERVO TRADICIONAL $550.00 C/D" },
    { src: "imagenes/tequila/jose-cuervo.webp", text: "JOSE CUERVO $400.00 C/D" },
    { src: "imagenes/tequila/maestro-dobel.webp", text: "MAESTRO DOBEL $740.00 C/D" },
    { src: "imagenes/tequila/Rey-del-mundo.webp", text: "REY DEL MUNDO $1,000.00 C/D" }
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
