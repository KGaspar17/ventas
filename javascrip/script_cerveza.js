var slideIndex = 0;
var slides = [
    { src: "imagenes/cerveza/amabar_xx_carton.png", text: "CARTON DE CERVEZA AMBAR XX $256.00" },
    { src: "imagenes/cerveza/ampolletas_clara.jpg", text: "CARTON DE CERVEZA CLARA AMPOLLETA $240.00" },
    { src: "imagenes/cerveza/barrilito.webp", text: "SIX DE BARRILITO $80.00 C/D $20.00" },
    { src: "imagenes/cerveza/caguama_xx.webp", text: "CAGUAMA XX $55.00" },
    { src: "imagenes/cerveza/cero.png", text: "SIX EN $90.00 Y C/D $25.00" },
    { src: "imagenes/cerveza/corona_light.webp", text: "CAGUAMA CORONA LIGHT $50.00" },
    { src: "imagenes/cerveza/lata_ambar_xx.png", text: "SIX CERVEZA AMBAR XX $123.00 Y C/D $20.00" },
    { src: "imagenes/cerveza/lata_ultra.webp", text: "SIX ULTRA $120.00 Y C/D $20.00" },
    { src: "imagenes/cerveza/light_lata.webp", text: "SIX $120 Y C/D $20.00" },
    { src: "imagenes/cerveza/media.png", text: "CARTON DE CORONA DE MEDIA $230.00" },
    { src: "imagenes/cerveza/mega.webp", text: "CAGUAMA MEGA CORONA $55.00 C/D" },
    { src: "imagenes/cerveza/pacifico.png", text: "SIX PACIFICO $110.00" },
    { src: "imagenes/cerveza/pack_ultra.png", text: "PACK ULTRA $240.00" },
    { src: "imagenes/cerveza/six_xx.png", text: "SIX CERVEZA XX $140.00" },
    { src: "imagenes/cerveza/victoria_caguama.webp", text: "CAGUAMA VICTORIA $55.00 C/D" }
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
