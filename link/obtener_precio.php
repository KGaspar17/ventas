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

// Obtener el nombre del producto enviado desde el cliente
$producto = $_GET['producto'];

// Consulta SQL para obtener el precio del producto
$sql = "SELECT precio FROM productos WHERE nombre = '$producto'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['precio'];
}

$conn->close();
