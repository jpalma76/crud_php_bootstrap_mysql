<?php
session_start();
if($_POST) {
    // valida si usuario y contrasenia no están vacías
    if(($_POST['usuario']=="admin")&&($_POST['contrasenia']=="password")) {
        // Crea las variables para decirle al sistema si estas logueado
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="JPALMA76";
        header('Location: inicio.php');
    } else {
        $mensaje="Error, el usuario y/o contraseña sin incorrectos";
    }

}


?>

<!doctype html>
<html lang="es">
<head>
    <title>Administracion sitio web</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br><br><br>
<div class="container">
    <div class="row">

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">

                <?php if(isset($mensaje)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php } ?>

                    <form method="post">
                        <div class = "form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Escribe tu usuario">
                        </div>

                        <div class = "form-group">
                            <label for="contrasenia">Contraseña:</label>
                            <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Escribe tu contraseña">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                        <button type="submit" class="btn btn-danger"><a style="color: white; text-decoration: none;" href="../index.php">Salir</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>