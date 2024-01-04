<?php
// Verifica si se recibieron los datos necesarios
if (isset($_POST['producto']) && isset($_POST['cantidad'])) {
    // Recupera los datos de la solicitud
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];

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
        $consulta = "UPDATE productos SET cantidad = cantidad + $cantidad WHERE nombre = '$producto'";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo 'success'; // Éxito en la actualización
        } else {
            echo 'error'; // Error en la actualización
        }

        mysqli_close($conexion); // Cierra la conexión a la base de datos
    }
} else {
    // Si no se enviaron los datos esperados
    echo 'error';
}
