<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

include_once("../model/Object_Blog.php");
include_once("../model/Handle_Object_Blog.php");

try {
    $conexion = new PDO("mysql:host=localhost; dbname=blog", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión exitosa"; 

    if (isset($_FILES["image"])) {
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
            echo "No hay error en la transmisión del archivo <br>";
            $destino_ruta = dirname(__DIR__, 1) . "/img/" . basename($_FILES["image"]["name"]);
            //var_dump($destino_ruta);

            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $destino_ruta)) {
                    echo "El archivo " . $_FILES["image"]["name"] . " se ha copiado en el directorio img <br>";
                } else {
                    echo "No se pudo copiar el archivo " . $_FILES["image"]["name"] . " en el directorio img";
                }
            } else {
                echo "El archivo no es válido.";
            }
        }
    } 

    $handle_object = new Handle_Object_Blog($conexion);

    $blog = new Object_Blog();
    $blog->setTitle(htmlentities($_POST["title"], ENT_QUOTES));
    $blog->setComment(htmlentities($_POST["comment"], ENT_QUOTES));
    $blog->setDate(date("Y-m-d H:i:s"));
    $blog->setImage(basename($_FILES["image"]["name"])); 

    echo "Titulo: " . $blog->getTitle() . "<br>";
    echo "Comentario: " . $blog->getComment() . "<br>";
    echo "Fecha: " . $blog->getDate() . "<br>";
    echo "Imagen: " . $blog->getImage() . "<br>";

    $handle_object->insert_content($blog);

    echo "<br> Contenido ingresado correctamente al BLOG <br>";
} catch (PDOException $e) {
    die("Error " . $e->getMessage());
}

?>

</body>

</html>