<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style_ventas.css">
    <title>Modificar Precios</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascrip/script_modificar.js"></script>
</head>

<body>
    <div class="container">
        <h1>MODIFICAR PRECIOS</h1>
        <form id="venta-form">
            <div class="form-group">
                <label for="producto">Producto:</label>
                <select id="producto" name="producto" required>
                    <option value="" disabled selected>Selecciona un producto</option>
                    <!-- Opciones de productos se cargarán dinámicamente con JavaScript -->
                </select>
            </div>
            <div class="form-group">
                <label for="nombre">Precio anterior:</label>
                <input type="text" id="precio" name="precio" class="floating-input" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nuevo precio:</label>
                <input type="text" id="new_precio" name="new_precio" class="floating-input" required>
            </div>
            <div class="form-group">
                <button onclick="window.location.href='productos.php'" class="btn btn--form">REGRESAR</button>
                <button type="submit">MODIFICAR PRECIO</button>
            </div>
        </form>
        <div id="spinner" style="display: none;">
            Cargando productos...
            <ul id="spinner-productos"></ul>
        </div>
</body>

</html>