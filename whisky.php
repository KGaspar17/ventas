<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Carrusel</title>
    <link rel="stylesheet" type="text/css" href="style/style_carrusel.css">
    <link rel="stylesheet" type="text/css" href="style/style_menu.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <h1>WHISKY</h1>
        <div class="menu-icon">
            <!-- Icono de menú hamburguesa (las tres líneas) -->
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="carrusel.php">MENU PRINCIAL</a></li>
                <li><a href="contacto.php">CONTACTANOS</a></li>
                <li><a href="vinos.php">VINOS</a></li>
                <li><a href="cerveza.php">CERVEZA</a></li>
                <li><a href="tequila.php">TEQUILA</a></li>
                <li><a href="vodka.php">VODKA</a></li>
                <li><a href="ron.php">RON</a></li>
                <li><a href="index.php">SALIR</a></li>
            </ul>
        </nav>
    </header>
    <div class="carousel">
        <div class="carousel-container">
            <!-- Aquí se agregarán las imágenes del carrusel -->
            <div class="container">
                <img src="imagenes/whisky/Ballantines-Finest.jpg" alt="Imagen 1" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/ballentines-wild.webp" alt="Imagen 2" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/black&white.png" alt="Imagen 3" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/Buchanans_Two_Souls_BT.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/buchan-s-12.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/Buvhanan´s-master.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/jack-daniel´s.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/johnnie-walker-black-label.jpg" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/johnnie-walker-double-black.jpg" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/JW-Blue-label.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/Red-label.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/whisky-passport-scotch.jpg" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/whisky/william-lawson´s.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
        </div>
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>
    <script src="javascrip/script_whisky.js"></script>
    <script>
        const menuIcon = document.querySelector('.menu-icon');
        const menu = document.querySelector('.menu');

        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>