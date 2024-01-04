<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style_carrusel.css">
    <link rel="stylesheet" type="text/css" href="style/style_menu.css">
    <title>DISPONIBLES</title>
</head>
<body>
<header>
    <nav class="menu">
        <div class="menu-content">
            <ul>
                <li><a href="productos.php">| PRODUCTOS</a></li>
                <li><a href="altas.php">| REGISTRAR UN TRABAJADOR</a></li>
                <li><a href="index.php">| SALIR</a></li>
            </ul>
        </div>
    </nav>
    <h1>MENU</h1>
    <div class="menu-icon" id="menu-icon">
        <!-- Icono de menú hamburguesa (las tres líneas) -->
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
</header>

<div class="welcome-message">
    <?php
    $host = "localhost";
    $usuario_bd = "root";
    $contrasena_bd = "";
    $nombre_bd = "gc";
    $tabla_usuarios = "usuarios";
    
    // Verificar si el usuario ha iniciado sesión y recuperar el nombre de la base de datos
    session_start();
    if (isset($_SESSION['usuario'])) {
        $conexion = mysqli_connect($host, $usuario_bd, $contrasena_bd, $nombre_bd);

        if (!$conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        $nombreUsuario = '';
        $usuario = $_SESSION['usuario'];
        $query = "SELECT nombre, apellidoP FROM $tabla_usuarios WHERE usu = ?";
        $stmt = mysqli_prepare($conexion, $query);

        if (!$stmt) {
            die("Error en la consulta preparada: " . mysqli_error($conexion));
        }

        mysqli_stmt_bind_param($stmt, "s", $usuario);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if (!$resultado) {
            die("Error al obtener el resultado de la consulta: " . mysqli_error($conexion));
        }

        $fila = mysqli_fetch_assoc($resultado);
        $nombreUsuario = $fila['nombre'];
        $apellido = $fila['apellidoP'];

        mysqli_stmt_close($stmt);
        mysqli_close($conexion);

//         // ...
// echo '<div class="welcome-message" style="text-align: center;">';
// echo '<span style="font-family: \'Brush Script MT\', cursive; font-size: 72px;"><em>BIENVENIDO</em></span> <br>';
// echo '<span style="font-family: \'Brush Script MT\', cursive; font-size: 72px;">' . $nombreUsuario . '</span>';
// echo '</div>';
// // ...
    echo '<div class="welcome-message" style="text-align: center;">';
    echo 'BIENVENIDO<br>';
    echo '<span style="font-family: \'Brush Script MT\', cursive; font-size: 72px;">' . $nombreUsuario. $apellido.  '</span>';
    echo '</div>';
    }
    ?>
</div>

<script>
    const menuIcon = document.getElementById('menu-icon');
    const menu = document.querySelector('.menu');

    menuIcon.addEventListener('click', () => {
        menu.classList.toggle('active');
    });
</script>
</body>
</html>
