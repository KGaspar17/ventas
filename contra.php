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
    $newPassword = $_POST["new_password"];

    // Verificar si los datos coinciden con los registros en la base de datos
    $sql_check = "SELECT * FROM usuarios WHERE nombre = ? AND apellidoP = ? AND apellidoM = ? AND usu = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("ssss", $nombre, $apellidoP, $apellidoM, $usu);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows === 1) {
        if (strlen($newPassword) >= 8 && strlen($newPassword) <= 15) {
            // Preparar la consulta SQL
            $sql_update = "UPDATE usuarios SET password = ? WHERE nombre = ? AND apellidoP = ? AND apellidoM = ? AND usu = ?";

            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bind_param("sssss", $newPassword, $nombre, $apellidoP, $apellidoM, $usu);

            if ($stmt_update->execute()) {
                echo "success"; // Envía respuesta de éxito
            } else {
                echo "error"; // Envía respuesta de error
            }
        } else {
            echo "password_length_error"; // Envía respuesta de error por longitud de contraseña
        }
    } else {
        echo "data_mismatch_error"; // Envía respuesta de error por datos incorrectos
    }

    $stmt_check->close();
}

// Cerrar la conexión
$conn->close();
?>
