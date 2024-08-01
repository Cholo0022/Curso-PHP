<?php

class Compra_auto {

    private int $precio;
    private static $descuento = 0;

    function __construct (private string $gama){
        if ($gama == "base"){
            $this->precio = 20000;
        }

        elseif ($gama == "max"){
            $this->precio = 30000;
        }

        elseif ($gama == "full"){
            $this->precio = 40000;
        }

    }

    function aire_acondicionado(){
        $this->precio += 2000;
    }

    function tapizado_cuero (string $color){

        if ($color == "blanco"){
            $this->precio += 2000;
        }
        elseif ($color == "negro"){
            $this->precio +=3000;
        }
    }

    static function promo(){
        if (date("d-m-y") > "01-01-24"){
           self::$descuento = 4500;
        }
    }

    function precio_final(){
        return $this->precio - self::$descuento;
    }

}


?>