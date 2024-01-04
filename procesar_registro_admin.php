<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gc";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $apellidoP = $_POST["apellidoP"];
    $apellidoM = $_POST["apellidoM"];
    $usu = $_POST["usu"];
    $password = $_POST["password"];   

    if (strlen($password) >= 8 && strlen($password) <= 15) {
        $status = 'a';
        $id_tipo = 1;

        // Preparar la consulta SQL
        $sql = "INSERT INTO usuarios (nombre, apellidoP, apellidoM, usu, password, status, id_tipo) 
                VALUES ('$nombre', '$apellidoP', '$apellidoM', '$usu', '$password', '$status', '$id_tipo')";

        if ($conn->query($sql) === TRUE) {
            header("Location: inventario.php"); // Redirigir al usuario a index.php
            exit(); // Terminar el script para asegurar la redirección
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "La contraseña debe tener entre 8 y 15 caracteres.";
    }
}

// Cerrar la conexión
$conn->close();
?>
