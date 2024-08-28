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
        $consult=$this->db->query("SELECT * FROM productos");
        while($row=$consult->fetch(PDO::FETCH_ASSOC)){
            $this->products[]=$row;
        }

        return $this->products;
    }

    
}

?>