<?php

class Conectar{

    public static function conexion(){

        try{

            $conexion = new PDO("mysql:host=localhost; dbname=tienda", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARSET utf8");

        }catch(Exception $e){
            die ("Error: " . $e->getMessage());
            echo "linea del error " . $e->getLine();
        }

        return $conexion;
    }
}

?>