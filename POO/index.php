<?php

    require "MostrarPeliculas.php";
    
    $peliculas = new MostrarPeliculas();

    $array_peliculas = $peliculas->get_peliculas();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        foreach($array_peliculas as $pelicula){
            echo "<tabea><tr><td>";
            echo $pelicula["id"] . "</td><td>";
            echo $pelicula["nombre"] . "</td><td>";
            echo $pelicula["descripcion"] . "</td><td>";
            echo $pelicula["precio"] . "</td><td></tr></table>";
            echo "<br>";
            echo "<br>";
        }

    ?>
</body>
</html>