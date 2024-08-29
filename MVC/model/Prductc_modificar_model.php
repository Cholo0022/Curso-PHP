<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        table {
            width: 50%;
            margin: 0 auto;
            /* Centrando la tabla en la pantalla */
            border-collapse: collapse;
            /* Combina los bordes en una sola línea */
        }

        th,
        td {
            border: 1px solid black;
            /* Bordes de color negro */
            padding: 8px;
            text-align: center;
            /* Centra el contenido dentro de las celdas */
        }

        th {
            background-color: #f2f2f2;
            /* Color de fondo para los encabezados */
        }
    </style>
</head>

<body>
    <?php
    
    require("Conectar.php");

        $conexion = Conectar::conexion();
 
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];

        $sql = "UPDATE productos SET nombre = :miNom, descripcion = :miDesc, precio = :miPrec WHERE id=:miId";

        $result = $conexion->prepare($sql);

        $result->execute(array(":miId" => $id, ":miNom" => $nombre, ":miDesc" => $descripcion, ":miPrec" => $precio));

        header("location:../index.php");
    
    ?>
    

</body>

</html>