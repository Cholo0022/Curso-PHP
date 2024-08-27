<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
    try {
        $conexion = new PDO("mysql:host=localhost; dbname=tienda", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARSET utf8");

        $sql = "SELECT * FROM datos_clientes";
        $result = $conexion->prepare($sql);
        $result->execute(array());

        $registros_por_pagina = 5;

        if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"];
        } else {
            $pagina = 1;
            // header("location:index.php");
        }

        $empezar_desde = ($pagina - 1) * $registros_por_pagina;


        $cantidad_registros = $result->rowCount();
        $cantidad_paginas = ceil($cantidad_registros / $registros_por_pagina);

        //echo "Cantidad de registros " . $cantidad_registros . "<br>";
        //echo "Cantidad de paginas " . $cantidad_paginas . "<br>";

        $sql_paginado = "SELECT * FROM datos_clientes LIMIT $empezar_desde, $registros_por_pagina";
        $result = $conexion->prepare($sql_paginado);
        $result->execute(array());
    ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>


            <?php while ($persona = $result->fetch(PDO::FETCH_ASSOC)): ?>


                <tr>
                    <td><?php echo $persona["id"] ?></td>
                    <td><?php echo $persona["nombre"] ?></td>
                    <td><?php echo $persona["apellido"] ?></td>
                    <td><?php echo $persona["direccion"] ?></td>
                    <td>
                        <a href="borrar_registro.php?id=<?php echo $persona["id"] ?>"><input type="button" name="borrar" id="borrar" value="Borrar"></a>
                    </td>
                    <td>
                        <a href="editar_registro.php?id=<?php echo $persona["id"] ?>&nombre=<?php echo $persona["nombre"] ?>&apellido=<?php echo $persona["apellido"] ?>&direccion=<?php echo $persona["direccion"] ?> "><input type="button" name="modificar" id="modificar" value="Modificar"></a>
                    </td>
                </tr>
            <?php endwhile; ?>

            <tr>
                <td></td>
                <td><input type="text" name="nombre" id="nombre"></td>
                <td><input type="text" name="apellido" id="apellido"></td>
                <td><input type="text" name="direccion" id="direccion"></td>
                <td><input type="submit" name="insertar" id="insertar" value="Registrar"></td>
            </tr>

        </table>

    <?php
        $result->closeCursor();
    } catch (Exception $e) {
        die("Error " . $e->getMessage());
    }
    ?>


    <nav aria-label="Page navigation example ">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>

            <?php for ($i = 1; $i <= $cantidad_paginas; $i++): ?>
                <li class="page-item">
                    <a class="page-link" href="?pagina=<?= $i; ?>"><?= $i; ?></a>
                </li>
            <?php endfor; ?>

            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>