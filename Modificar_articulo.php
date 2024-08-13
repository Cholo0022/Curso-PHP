<?php  
    require("datos_conexion.php");
    
    $id = $_GET["id"];
    $nombre = $_GET["name"];
    $description = $_GET["description"];
    $color = $_GET["color"];

        $conexion= mysqli_connect($db_host,$db_usuario,$db_password);

        if(mysqli_connect_errno()){
            echo("Error conexión con la base de datos");
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("La base de datos no existe");


        $query = "UPDATE products SET name='$nombre', color='$color', description='$description'  WHERE id = $id";

        $result=mysqli_query($conexion,$query);

        if ($result!=null){
            echo("Registro Modificado <br>");
            echo $id . "<br>"; 
            echo $nombre . "<br>";
            echo $description . "<br>";
            echo $color . "<br>";
        } else {
            echo("Registro no encontrado");
        }
        
        mysqli_close($conexion);
?>