<?php

class Compra_vehiculo{

    private int $precio; 
    private string $gama;
    private static int $bonificacion = 0;


    public function __construct(string $gama){
        if ($gama == "base"){
            $this->precio = 20000;
        }

        elseif ($gama == "full"){
            $this->precio = 30000;
        }
    }

    function aire(){
        $this->$precio += 2000;
    }

    function tapizado_color(string $color){
        if ($color == "blanco"){
            $this->precio += 2500;
        } elseif ( $color == "beige"){
            $this->precio += 3500;
        }
    }

    function aire_acondicionado(){
        $this->precio += 2500;
    }


    static function descuento(){
        self::$bonificacion=4500;
    }

    function precio_final (){
        return $this->precio - self::$bonificacion;
    }


}


?>