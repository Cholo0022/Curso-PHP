<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        require("datos_conexion_tienda.php");
        $conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

        $query = "SELECT * FROM productos";

        $result= mysqli_query($conexion, $query);
        
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

            echo "<form action='baja_producto.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo $row["id"] . " - ";
            echo $row["nombre"] . " - ";
            echo $row["descripcion"] . " - ";
            echo $row["precio"] . " - ";
            echo $row["fechaRegistro"] . " - ";
            echo "<input type='submit' value='Eliminar'>";
            echo "</form><br>";
        };
    ?>

</body>
</html>