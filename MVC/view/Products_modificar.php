<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
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
<?php
$id = $_GET["id"];
$nombre = $_GET["nombre"];
$descripcion = $_GET["descripcion"];
$precio = $_GET["precio"];
?>

<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Actualizar</th>
        </tr>

        <tr>
            <form action="../model/Productc_modificar_model.php" method="post">
                <td><input type="hidden" name="id" id="id" value="<?php echo $id ?>"></td>
                <td><input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>"></td>
                <td><input type="text" name="descripcion" id="descripcion" value="<?php echo $descripcion ?>"></td>
                <td><input type="text" name="precio" id="precio" value="<?php echo $precio ?>"></td>
                <td><input type="submit" value="Modificar" name="modificar" id="modificar"></td>
            </form>
        </tr>
    </table>


</body>

</html>