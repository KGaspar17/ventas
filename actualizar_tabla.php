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

$searchText = $_GET['searchText'];

// Consulta SQL para obtener los datos de la tabla
$sql = "SELECT nombre, precio, cantidad FROM productos WHERE nombre LIKE '%$searchText%'";
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
