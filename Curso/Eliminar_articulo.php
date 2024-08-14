<?php  

        $id = $_POST["id"];
     
        require("datos_conexion.php");

        $conexion= mysqli_connect($db_host,$db_usuario,$db_password);

        if(mysqli_connect_errno()){
            echo("Error conexión con la base de datos");
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("La base de datos no existe");


        $query = "DELETE FROM products WHERE id = $id";

        $result=mysqli_query($conexion,$query);

        if ($result!=null){
            echo("Registro eliminado");
        } else {
            echo("Registro no encontrado");
        }
        
        mysqli_close($conexion);
?>