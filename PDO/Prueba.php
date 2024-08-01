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

        $conexion = new mysqli($db_host, $db_usuario, $db_password, $db_nombre);


        if ($conexion->connect_errno){
            echo "Error de conexión" . $conexion->connect_errno;
        }

        $conexion->set_charset("utf8");

        $sql = "SELECT * FROM productos";

        $result = $conexion->query($sql);

        if ($conexion->errno){
            die($conexion->error);
        }

        while ($row = $result->fetch_assoc()){

            echo $row["id"]. " - ";
            echo $row["nombre"]. " - ";
            echo $row["descripcion"]. " - ";
            echo $row["precio"]. "<br>";

        }

        $conexion->close();



    ?>

</body>
</html>