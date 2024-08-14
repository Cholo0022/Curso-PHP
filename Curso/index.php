<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    include("Concesionaria.php");
    $compra_andres = new Compra_vehiculo("base"); 
    $compra_luna = new Compra_vehiculo("full");

    Compra_vehiculo::descuento();
    $compra_andres->tapizado_color("beige");
    $compra_andres->aire_acondicionado();

    $compra_luna->tapizado_color("blanco");
    $compra_luna->aire_acondicionado();

    echo $compra_andres->precio_final() . "<br>";
    echo $compra_luna->precio_final() . "<br>";
    
    $nombres=array("Andres", "Luna", "Ludmila", "Lucia", "Lucrecia");

    //echo $nombres[1] . "<br>";

    sort($nombres);

    foreach( $nombres as $nombre ){
        echo $nombre . "<br>";
    }


    
    ?>
</body>
</html>