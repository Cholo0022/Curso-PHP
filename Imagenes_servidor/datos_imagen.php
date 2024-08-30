<?php
    $nombre_imagen = $_FILES["imagen"]["name"];
    $tipo_imagen = $_FILES["imagen"]["type"];
    $tamanio_imagen = $_FILES["imagen"]["size"];

    //Ruta de la carpeta destino en el servidor

    $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "./imagenes_servidor/img/";

    move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpeta_destino.$nombre_imagen);


?>