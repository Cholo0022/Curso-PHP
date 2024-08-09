<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $buscar_nombre= $_GET["buscar_nombre"];
    $buscar_color = $_GET["buscar_color"];
    try {
    $conexion = new PDO('mysql:host=localhost; dbname=mare', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    //echo "Conexión exitosa";
    //echo $busqueda;
    $sql = "SELECT name, price, stock, color FROM products WHERE name = :nombre OR color = :color_art";

    $result=$conexion->prepare($sql);
    $result->execute(array(":nombre"=>$buscar_nombre, ":color_art"=>$buscar_color));

    
    while($registro=$result->fetch(PDO::FETCH_ASSOC)) {
        echo "Producto: " . $registro["name"] . " - Precio: " . $registro["price"] . " - Stock: " . $registro["stock"] . " - Color: " . $registro["color"] . "<br>";
    }

    $result->closeCursor();

    } catch (Exception $e){
        die ("Error: " . $e->getMessage());
    }
    finally{
        $conexion=null;
    }
    ?>
</body>
</html>