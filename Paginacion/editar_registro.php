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
    include("Conexion.php");
    
    if (!isset($_POST["modificar"])) {
        $id = $_GET["id"];
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $direccion = $_GET["direccion"];
    } else {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];

        $sql = "UPDATE datos_clientes SET nombre = :miNom, apellido = :miApe, direccion = :miDir WHERE id=:miId";

        $result = $conexion->prepare($sql);

        $result->execute(array(":miId" => $id, ":miNom" => $nombre, ":miApe" => $apellido, ":miDir" => $direccion));

        header("location:index.php");
    }
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Actualizar</th>
        </tr>

        <tr>
            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                <td><input type="hidden" name="id" id="id" value="<?php echo $id ?>"></td>
                <td><input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>"></td>
                <td><input type="text" name="apellido" id="apellido" value="<?php echo $apellido ?>"></td>
                <td><input type="text" name="direccion" id="direccion" value="<?php echo $direccion ?>"></td>
                <td><input type="submit" value="Modificar" name="modificar" id="modificar"></td>
            </form>
        </tr>
    </table>


</body>

</html>