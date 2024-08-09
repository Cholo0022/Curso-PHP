<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    try {
       $conexion = new PDO('mysql:host=localhost; dbname=peliculas_cac_java', 'root', 'root');
       $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       //echo "Conexión exitosa";
    } catch (Exception $e){
        die ("Error: " . $e->getMessage());
    }finally{
        $conexion=null;
    }
    ?>
    
</body>
</html>