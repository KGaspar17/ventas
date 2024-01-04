<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/styles_productos.css">
    <title>TABLA DE PRODUCTOS</title>
</head>

<body>
<div class="page-container">
    <center>
        <h1>PRODUCTOS</h1>
    </center>
    <div class='search-container'>
        <center>
            <input type='text' id='search-input' placeholder='Buscar por nombre...'>
            <button id='search-button'>BUSCAR</button>
        </center>
    </div>
    <div id='tabla-container' style='max-height: 400px; overflow-y: scroll; margin-top: 35px;'>
        <?php
        // Conexión a la base de datos (debes llenar los detalles)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gc";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consulta SQL para obtener los datos de la tabla con límite de 25 registros
        $sql = "SELECT nombre, precio, cantidad FROM productos LIMIT 25";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table id='tabla-productos'>";
            echo "<thead><tr><th>Nombre</th><th>Precio</th><th>Cantidad</th></tr></thead>";
            echo "<tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>", "$" . $row["precio"] . "</td>";
                echo "<td>" . $row["cantidad"] . "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "No se encontraron registros.";
        }

        $conn->close();
        ?>
    </div>
    <div class="m-t-lg">
    <button onclick="window.location.href='inventario.php'" class="button">REGRESAR</button>
    <button onclick="window.location.href='ventas.php'" class="button">REALIZAR VENTA</button>
    <button onclick="window.location.href='agregar.php'" class="button">AGREGAR CANTIDAD A LOS PRODUCTOS</button>
    <button onclick="window.location.href='precios.php'" class="button">MODIFICAR PRECIOS</button>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function actualizarTabla(searchText = '') {
            $.ajax({
                url: 'actualizar_tabla.php',
                method: 'GET',
                data: {
                    searchText: searchText
                },
                success: function(data) {
                    $('#tabla-container').html(data);
                    $('#search-input').val(''); // Limpiar el campo de búsqueda
                }
            });
        }

        $(document).ready(function() {
            actualizarTabla();

            $('#search-button').on('click', function() {
                var searchText = $('#search-input').val().toLowerCase();
                actualizarTabla(searchText);
            });
        });
    </script>
</div>
</body>

</html>
