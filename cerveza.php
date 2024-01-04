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
        <h1>CERVEZA</h1>
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
                <li><a href="whisky.php">WHISKY</a></li>
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
                <img src="imagenes/cerveza/amabar_xx_carton.png" alt="Imagen 1" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/ampolletas_clara.jpg" alt="Imagen 2" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/barrilito.webp" alt="Imagen 3" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/caguama_xx.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/cero.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/corona_light.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/familiar_pacifico.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/lata_ambar_xx.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/lata_ultra.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/light_lata.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/media.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/media_oscura.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/media_pacidico.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/mega.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/pacifico.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/pack_ultra.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/six_pack_xx_ambar.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/six_xx.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/sola_xx.png"alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/ultra_six.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/victoria_caguama.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/cerveza/xx_roja.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
        </div>
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>
    <script src="javascrip/script_cerveza.js"></script>
    <script>
        const menuIcon = document.querySelector('.menu-icon');
        const menu = document.querySelector('.menu');

        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>
