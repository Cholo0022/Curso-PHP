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
            echo $pelicula["id_pelicula"] . "</td><td>";
            echo $pelicula["titulo"] . "</td><td>";
            echo $pelicula["duracion"] . "</td><td>";
            echo $pelicula["genero"] . "</td><td></tr></table>";
            echo "<br>";
            echo "<br>";
        }

    ?>
</body>
</html>