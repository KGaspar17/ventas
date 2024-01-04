var slideIndex = 0;
var slides = [
    { src: "imagenes/whisky/Ballantines-Finest.jpg", text: "BALLANTINES FINEST $240.00 C/D" },
    { src: "imagenes/whisky/ballentines-wild.webp", text: "BALLANTINES WILD $310.00 C/D" },
    { src: "imagenes/whisky/black&white.png", text: "BLAC & WHITE $220.00 C/D" },
    { src: "imagenes/whisky/Buchanans_Two_Souls_BT.png", text: "BUCHANANS TWO SOULS $850.00 C/D" },
    { src: "imagenes/whisky/buchan-s-12.webp", text: "BUCHANANS 12 $650.00 C/D" },
    { src: "imagenes/whisky/Buvhanan´s-master.png", text: "BUCHANANS MASTER $1,200.00 C/D" },
    { src: "imagenes/whisky/johnnie-walker-black-label.jpg", text: "JOHNNIE WALKER BLACK LABEL $400.00 C/D" },
    { src: "imagenes/whisky/johnnie-walker-double-black.jpg", text: "JOHNNIE WALKER DOUBLE LABEL $1,250.00 C/D" },
    { src: "imagenes/whisky/JW-Blue-label.png", text: "JOHNNIE WALKER BLUE LABEL $7,300.00 C/D" },
    { src: "imagenes/whisky/Red-label.webp", text: "RED LABEL $350.00 C/D" },
    { src: "imagenes/whisky/whisky-passport-scotch.jpg", text: "WHISKY PASSPORT SCOTCH $200.00 C/D" },
    { src: "imagenes/whisky/william-lawson´s.png", text: "WILLIAM LAWSON´S $240.00 C/D" }
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
