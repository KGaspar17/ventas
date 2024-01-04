<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT nombre FROM productos";
$result = $conn->query($sql);

$nombres = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombres[] = $row["nombre"];
    }
}

$conn->close();

echo json_encode($nombres);
