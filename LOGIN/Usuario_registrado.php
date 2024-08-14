<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php
        session_start();
        if (!isset($_SESSION["usuario"])){
            header("location:Formulario_login.php");
        }
    ?>
    <h1>Bienvenido <?php echo $_SESSION["usuario"]; ?></h1>

    <nav>
        <ul>
            <li><a href="usuario_registrado1.php">Página 1</a></li>
            <li><a href="usuario_registrado2.php">Página 2</a></li>
            <li><a href="usuario_registrado2.php">Página 3</a></li>
        </ul>
    </nav>
    <p>Esta sección solo pueden acceder usuarios registrados!</p>

    <a href="Cerrar_sesion.php">Cierrar Sesion</a>
    </body>
</html>