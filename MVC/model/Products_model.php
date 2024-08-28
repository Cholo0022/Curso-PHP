<?php

class Products_model{

    private $db;
    private $products;

    public function __construct(){

        require_once("model/Conectar.php");
        $this->db=Conectar::conexion();
        $this->products=array();
    }
    
    public function getProducts (){
        require("paginacion_model.php");
        $consult=$this->db->query("SELECT * FROM productos LIMIT $empezar_desde, $registros_por_pagina");
        while($row=$consult->fetch(PDO::FETCH_ASSOC)){
            $this->products[]=$row;
        }

        return $this->products;
    }

    
}

?>