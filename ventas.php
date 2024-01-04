<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style_ventas.css">
    <title>TICKET DE VENTAS</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascrip/script_ventas.js"></script>
</head>

<body>
    <div class="container">
        <h1>Formulario de Ventas</h1>
        <form id="venta-form">
            <div class="form-group">
                <label for="nombre">Nombre del Cliente:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="producto">Producto:</label>
                <select id="producto" name="producto" required>
                    <option value="" disabled selected>Selecciona un producto</option>
                    <!-- Opciones de productos se cargarán dinámicamente con JavaScript -->
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" min="1" required>
            </div>
            <div class="form-group">
                <label for="total">Total a Pagar:</label>
                <input type="text" id="total" name="total" readonly>
            </div>
            <div class="form-group">
                <button onclick="window.location.href='productos.php'" class="btn btn--form">REGRESAR</button>
                <button type="submit">VENTA</button>
            </div>
        </form>

        <div id="spinner" style="display: none;">
    Cargando productos...
    <ul id="spinner-productos"></ul>
</div>
    </div>
</body>

</html>
