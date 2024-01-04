var slideIndex = 0;
var slides = [
    { src: "imagenes/vodka/absolut-mango.png", text: "ABSOLUT MANGO $280.00 C/D" },
    { src: "imagenes/vodka/oso-negro.jpg", text: "OSO NEGRO $125.00 C/D" },
    { src: "imagenes/vodka/SKYY.png", text: "SKYY $200.00 C/D" },
    { src: "imagenes/vodka/smirndff-tamarindo.png", text: "SMIRNOFF TAMARINDO $230.00 C/D" },
    { src: "imagenes/vodka/Smirnoff.webp", text: "SMIRNOFF $280.00 C/D" },
    { src: "imagenes/vodka/vodka absolut raspberri.webp", text: "ABSOLUT RASPERRI $310.00 C/D" }
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
