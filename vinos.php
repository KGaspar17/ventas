<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Carrusel</title>
    <link rel="stylesheet" type="text/css" href="style/style_vinos.css">
    <link rel="stylesheet" type="text/css" href="style/style_menu.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <h1>VINOS</h1>
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
                <li><a href="cerveza.php">CERVEZA</a></li>
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
                <img src="imagenes/vinos/Castigo_del_Mango.png" alt="Imagen 1" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/vinos/Cuatro_Soles.jpg" alt="Imagen 2" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/vinos/Donato.png" alt="Imagen 3" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/vinos/gato_negro.png" alt="Imagen 4" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/vinos/Mil_vientos.png" alt="Imagen 5" class="image">
                <div class="overlay">
                </div>
            </div>
            <div class="container">
                <img src="imagenes/vinos/Riunite.png" alt="Imagen 6" class="image">
                <div class="overlay">
                </div>
            </div>
        </div>
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>
    <script src="javascrip/script_vinos.js"></script>
    <script>
        const menuIcon = document.querySelector('.menu-icon');
        const menu = document.querySelector('.menu');

        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>
