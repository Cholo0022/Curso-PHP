<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
    table {
        width: 50%;
        margin: 0 auto; /* Centrando la tabla en la pantalla */
        border-collapse: collapse; /* Combina los bordes en una sola línea */
    }
    th, td {
        border: 1px solid black; /* Bordes de color negro */
        padding: 8px;
        text-align: center; /* Centra el contenido dentro de las celdas */
    }
    th {
        background-color: #f2f2f2; /* Color de fondo para los encabezados */
    }
</style>
</head>

<body>
    <?php

    include("Conexion.php");

    $registro = $conexion->query("SELECT * FROM datos_clientes")->fetchAll(PDO::FETCH_OBJ);
    ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($registro as $persona): ?>
        <tr>
            <td><?php echo $persona->id; ?></td>
            <td><?php echo $persona->nombre; ?></td>
            <td><?php echo $persona->apellido; ?></td>
            <td><?php echo $persona->direccion; ?></td>
            <td>
               <a href="borrar_registro.php?id=<?php echo $persona->id ?>"><input type="button" name="borrar"  id="borrar" value="Borrar"></a>
                <input type="button" name="modificar" id="modificar" value="Modificar">
            </td>
        </tr>
    <?php endforeach; ?>
</table>


</body>

</html>