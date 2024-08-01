<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        function buscador($busqueda){
            
            require("datos_conexion.php");
            $conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

            $query = "SELECT * FROM products WHERE name LIKE '%$busqueda%' ";

            $result= mysqli_query($conexion, $query);
            
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

                echo $row["id"]. " - ";
                echo $row["name"]. " - ";
                echo $row["description"]. " - ";
                echo $row["color"]. " - ";
                echo $row["price"]. "<br>";
            };

            mysqli_close($conexion);
    }

?>
</head>
<body>
    
    <?php

        $miBusqueda = $_GET["buscar"];
        $pagina = $_SERVER["PHP_SELF"];

        if ($miBusqueda != null){
            buscador($miBusqueda);
        } else {
            echo ("<form action='" . $pagina . "' method='get'>
            <label>Buscar: <input type='text' name='buscar'></label>
            <input type='submit' value='Buscar'>
            </form>");
        }

    ?>
   

</body>
</html>