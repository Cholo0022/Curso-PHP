<?php

    $busqueda = $_GET["buscar"];

    require("datos_conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

    $query = "SELECT * FROM products WHERE name LIKE '%$busqueda%' ";

    $result= mysqli_query($conexion, $query);
    
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

        echo $row["id"]. " - ";
        echo $row["name"]. " - ";
        echo $row["description"]. " - ";
        echo $row["color"]. " - ";
        echo $row["price"]. "<br>";
    };

    mysqli_close();

?>