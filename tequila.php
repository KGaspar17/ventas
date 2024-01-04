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
        <h1>TEQUILA</h1>
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
                <li><a href="whisky.php">WHISKY</a></li>
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
                <img src="imagenes/tequila/1800-blanco.png" alt="Imagen 1" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/1800-cristalino.png" alt="Imagen 2" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/1800-reposado.webp" alt="Imagen 3" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/azul-mango.webp" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/azul.png" alt="Imagen 5" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/añejo-donJulio.webp" alt="Imagen 6" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/cabrito.png" alt="Imagen 7" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/centenario.webp" alt="Imagen 8" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/DonJulio-70.png" alt="Imagen 9" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/DonJulio.png" alt="Imagen 10" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/herradura-plata.webp" alt="Imagen 11" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/hornitos.webp" alt="Imagen 12" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/jose-cuervo-especial.png" alt="Imagen 13" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/jose-cuervo-tradicional.png" alt="Imagen 14" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/jose-cuervo.webp" alt="Imagen 15" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/maestro-dobel.webp" alt="Imagen 16" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/tequila/Rey-del-mundo.webp" alt="Imagen 17" class="image">
                <div class="overlay">
                </div>
            </div>
        </div>
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>
    <script src="javascrip/script_tequila.js"></script>
    <script>
        const menuIcon = document.querySelector('.menu-icon');
        const menu = document.querySelector('.menu');

        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>
</body>

</html>