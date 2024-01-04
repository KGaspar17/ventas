<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="png" type="image/png" href="imagenes/vinateria.jpg" >
    <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
    <header>
        <img src="imagenes/vinateria.jpg">
    </header>
<div class="logeo-form">
        <h2>Iniciar sesión</h2>
        <form action="conexion.php" method="POST">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <br>
            <center><a href="registro.php">Registrate</a></center>
            <br>
            <center><a href="recuperar.php">¿Olvidaste tu Contraseña?</a></center>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>