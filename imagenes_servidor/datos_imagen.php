<?php
$nombre_imagen = $_FILES["imagen"]["name"];
$tipo_imagen = $_FILES["imagen"]["type"];
$tamanio_imagen = $_FILES["imagen"]["size"];

echo $tamanio_imagen;
if ($tamanio_imagen <= 2000000) {
    //Ruta de la carpeta destino en el servidor
    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'./imagenes_servidor/img/';

    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
    } else {
        echo "Error al subir la imagen: ".$_FILES['imagen']['error'];
    }
    
} else {
    echo "Tamaño de imagen mayor a 2MB";
}
?>