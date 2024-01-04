<?php
// Verifica si se recibieron los datos necesarios y que sean números válidos
if (isset($_POST['producto']) && isset($_POST['new_precio']) && is_numeric($_POST['new_precio'])) {
    // Recupera los datos de la solicitud
    $producto = $_POST['producto'];
    $newPrecio = floatval($_POST['new_precio']);

    // Simulación de conexión a la base de datos (cambia estos valores con tus propios datos)
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basedatos = "gc";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

    // Verifica la conexión a la base de datos
    if (!$conexion) {
        echo 'error'; // Error de conexión
    } else {
        // Simulación de actualización en la base de datos (cambia esta consulta con tu propia lógica)
        $consulta = "UPDATE productos SET precio = $newPrecio WHERE nombre = '$producto'";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo 'success'; // Éxito en la actualización
        } else {
            echo 'error'; // Error en la actualización
        }

        mysqli_close($conexion); // Cierra la conexión a la base de datos
    }
} else {
    // Si no se enviaron los datos esperados o no se proporcionó un número válido
    echo 'error';
}
