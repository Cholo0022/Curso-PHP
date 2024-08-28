<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Document</title>

    
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
        </tr>

        <?php

        foreach ($matrizProduct as $product) {

            echo "<tr><td>" . $product["id"] . "</td>";
            echo "<td>" . $product["nombre"] . "</td>";
            echo "<td>" . $product["descripcion"] . "</td>";
            echo "<td>" . $product["precio"] . "</td>";
            echo "<td><input type='button' name='borrar' id='borrar' value='Borrar'></td>";
            echo "<td><input type='button' name='modificar' id='modificar' value='Modificar'></td></tr>";
        }

        ?>
        <tr>
                <td></td>
                <td><input type="text" name="nombre" id="nombre"></td>
                <td><input type="text" name="descripcion" id="descripcion"></td>
                <td><input type="text" name="precio" id="precio"></td>
                <td><input type="submit" name="insertar" id="insertar" value="Registrar"></td>
            </tr>

    </table>
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