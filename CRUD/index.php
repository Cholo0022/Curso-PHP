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

    if (isset($_POST["insertar"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];

        $sql = "INSERT INTO datos_clientes (nombre, apellido, direccion) VALUES (:nom, :ape, :dir)";

        $result = $conexion->prepare($sql);
        $result->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));

        header("location:index.php");

    }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Eliminar</th>
        <th>Modificar</th>
    </tr>
    <?php foreach ($registro as $persona): ?>
        <tr>
            <td><?php echo $persona->id; ?></td>
            <td><?php echo $persona->nombre; ?></td>
            <td><?php echo $persona->apellido; ?></td>
            <td><?php echo $persona->direccion; ?></td>
            <td>
               <a href="borrar_registro.php?id=<?php echo $persona->id ?>"><input type="button" name="borrar"  id="borrar" value="Borrar"></a>
            </td>
            <td>
            <a href="editar_registro.php?id=<?php echo $persona->id ?>&nombre=<?php echo $persona->nombre ?>&apellido=<?php echo $persona->apellido ?>&direccion=<?php echo $persona->direccion ?> "><input type="button" name="modificar"  id="modificar" value="Modificar"></a>
            </td>
        </tr>
    <?php endforeach; ?>

    <tr>
        <td></td>
        <td><input type="text" name="nombre" id="nombre"></td>
        <td><input type="text" name="apellido" id="apellido"></td>
        <td><input type="text" name="direccion" id="direccion"></td>
        <td><input type="submit" name="insertar" id="insertar" value="Registrar"></td>
    </tr>
</table>
</form>

</body>

</html>