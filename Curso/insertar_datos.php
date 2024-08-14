<?php  

    $nombre = $_GET["name"];
    $description = $_GET["description"];
    $color = $_GET["color"];
    $stock = $_GET["stock"];
 
 require("datos_conexion.php");

        $conexion= mysqli_connect($db_host,$db_usuario,$db_password);

        if(mysqli_connect_errno()){
            echo("Error conexión con la base de datos");
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("La base de datos no existe");


        $query="INSERT INTO products (name, description, color, stock) values ('$name', '$description', '$color', '$stock') ";

        $result=mysqli_query($conexion,$query);

        
        mysqli_close($conexion);
?>