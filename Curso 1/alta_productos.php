<?php

    $nombre = $_GET["nombre"];
    $descrip = $_GET["descr"];
    $precio = $_GET["precio"];

    require("datos_conexion_tienda.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

    $query = "INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descrip', '$precio')";

    $result= mysqli_query($conexion, $query);
    
    if ($result==false){
        echo "Error en la consulta";
    } else {
        echo "Registro cargado correctamente";
    }

    mysqli_close($conexion);

?>