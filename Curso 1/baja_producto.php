<?php

    $id = $_POST["id"];
    
    require("datos_conexion_tienda.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

    $query = "DELETE FROM productos WHERE id='$id'";

    $result= mysqli_query($conexion, $query);

    if ($result==false){
        echo "Error en la consulta";
    } else {
        echo "Registro Eliminado";
    }
 
    mysqli_close($conexion);

?>