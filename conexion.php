<?php
session_start();

$host = "localhost";
$usuario_bd = "root"; 
$contrasena_bd = ""; 
$nombre_bd = "gc"; 
$tabla_usuarios = "usuarios"; 

$conexion = mysqli_connect($host, $usuario_bd, $contrasena_bd, $nombre_bd);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$usuario = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM $tabla_usuarios WHERE usu = ? AND password = ?";
$stmt = mysqli_prepare($conexion, $query);

if (!$stmt) {
    die("Error en la consulta preparada: " . mysqli_error($conexion));
}

mysqli_stmt_bind_param($stmt, "ss", $usuario, $password);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if (!$resultado) {
    die("Error al obtener el resultado de la consulta: " . mysqli_error($conexion));
}

if (mysqli_num_rows($resultado) == 1) {
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila['status'] === 'a') {
        $_SESSION['usuario'] = $usuario;
        
        if ($fila['id_tipo'] == 1) {
            header("Location: inventario.php");
        } elseif ($fila['id_tipo'] == 2) {
            header("Location: carrusel.php");
        } else {
            header("Location: index.php");
        }
        
        exit;
    } else {
        // Usuario no está en estado 'a', redireccionar a la página de inicio de sesión con un mensaje de error
        header("Location: index.php?error=1");
        exit;
    }
} else {
    // El inicio de sesión falló, redireccionar a la página de inicio de sesión con un mensaje de error
    header("Location: index.php?error=2");
    exit;
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>