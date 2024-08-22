<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <?php
    
    include("Conexion.php");

    $registro = $conexion->query("SELECT * FROM datos_clientes")->fetchAll(PDO::FETCH_OBJ);


    ?>

    codigo html
</body>
</html>