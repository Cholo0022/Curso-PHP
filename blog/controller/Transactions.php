<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include("../model/Object_Blog.php");
    include("../model/Handle_Object_Blog.php");

    try {

        $conexion = new PDO("mysql:host=localhost; dbname=blog", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_FILES["image"]["error"]) {
            switch ($_FILES["image"]["error"]) {
                case 1:
                    echo "El tamaño del archivo supera el limite del servidor";
                    break;
                case 2:
                    echo "El tamaño del archivo supera el limite por el formulario";
                    break;
                case 3:
                    echo "El archivo del envio se ha interrumpido durante el envio";
                    break;
                case 4:
                    echo "El tamaño del archivo es nulo";
                    break;
            }
        } else {
            echo "No hay error en la transmisi{on del archivo <br>";
            if (isset($_FILES["image"]["name"]) && ($_FILES["image"]["error"] == UPLOAD_ERR_OK)) {
                $destino_ruta = "img/";
                move_uploaded_file($_FILES["image"]["tmp"], $destino_ruta) . $_FILES["image"]["name"];
                echo "El archivo " . $_FILES["image"]["name"] . " se ha copiado en el directorio img";
            } else {
                echo "El archivo no se ha copiado en el directorio img";
            }
        }
        $handle_object = new Handle_Object_Blog($conexion);

        $blog = new Blog();
        $blog->setTitle(htmlentities(addcslashes($_POST["title"]), ENT_QUOTES));
        $blog->setTitle(htmlentities(addcslashes($_POST["comment"]), ENT_QUOTES));
        $blog->setDate("Y-m-d H:i:s");
        $blog->setImage($_FILES["image"]);

        $handle_object->insert_content($blog);

        echo "<br>Contenido ingresado correctamente al BLOG<BR>";
    } catch (Exception $e) {
        die("Error " . $e->getMessage());
    }

    ?>
</body>

</html>