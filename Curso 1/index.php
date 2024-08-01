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

        Compra_auto::promo();

        $compra_andres = new Compra_auto("base");
        $compra_luna = new Compra_auto("base");



        $compra_andres->aire_acondicionado();
        $compra_andres->tapizado_cuero("blanco");

        $compra_luna->aire_acondicionado();
        $compra_luna->tapizado_cuero("negro");




        echo $compra_luna->precio_final() . "<br>";
        echo $compra_andres->precio_final() . "<br>";


        echo date("d-m-y");

    

    ?>

</body>
</html>