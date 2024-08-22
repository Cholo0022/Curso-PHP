<?php 

    try{

        $conexion = new PDO("mysql:host=localhost; dbname=tienda, 'root', ''");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARSET utf8");
        
    } catch (Exception $e){
        die("Error " . $e->getMessage());
        echo "Linea " . $e->gerLine();
    }

?>