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


    <p>Esta es la pagina 3</p>
    <a href="usuario_registrado.php">Volver</a>
    <a href="Cerrar_sesion.php">Cierrar Sesion</a>
    </body>
</html>