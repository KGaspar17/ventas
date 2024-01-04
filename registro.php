<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/styles_registro.css">
    <title>Registrate</title>
</head>
<body>
<div class="container">
    <div class="left-section"></div>
    <div class="right-section">
        <div class="signup__container">
            <div class="signup__container">
                <div class="container__child signup__thumbnail">
                    <div class="signup__overlay"></div>
                </div>
                <div class="container__child signup__form">
                    <form action="procesar_registro.php" method="post" name="registrationForm">
                        <div class="form-group">
                            <label for="username">Nombre</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Nombre" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Apellido Paterno</label>
                            <input class="form-control" type="text" name="apellidoP" id="apellidoP" placeholder="Apellido Paterno" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Apellido Materno</label>
                            <input class="form-control" type="text" name="apellidoM" id="apellidoM" placeholder="Apellido Materno" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Usuario</label>
                            <input class="form-control" type="text" name="usu" id="usu" placeholder="Nombre de Usuario" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
                        </div>
                        <div class="form-group">
                            <label for="passwordRepeat">Repetir Password</label>
                            <input class="form-control" type="password" name="passwordRepeat" id="passwordRepeat" placeholder="********" required />
                        </div>
                        <div class="m-t-lg">
                            <ul class="list-inline">
                                <input class="btn btn--form" type="submit" value="Registrarse" />
                                <a href="index.php" class="btn btn--form">Regresar</a>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>