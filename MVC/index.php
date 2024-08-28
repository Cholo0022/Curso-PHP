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

            require_once("controller/Products_controller.php");
            
        ?>

</body>
</html>