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
        <h1>RON</h1>
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
                <li><a href="tequila.php">TEQUILA</a></li>
                <li><a href="vodka.php">VODKA</a></li>
                <li><a href="index.php">SALIR</a></li>
            </ul>
        </nav>
    </header>
    <div class="carousel">
        <div class="carousel-container">
            <!-- Aquí se agregarán las imágenes del carrusel -->
            <div class="container">
                <img src="imagenes/ron/caldas.webp" alt="Imagen 1" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/ron/captain-morgan.jpg" alt="Imagen 2" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/ron/kraken.jpg" alt="Imagen 3" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/ron/la-gloria.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/ron/orava.webp" alt="Imagen 5" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/ron/ron bacardi blanco.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
        </div>
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>
    <script src="javascrip/script_ron.js"></script>
    <script>
        const menuIcon = document.querySelector('.menu-icon');
        const menu = document.querySelector('.menu');

        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>
</body>

</html>