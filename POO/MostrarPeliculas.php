<?php
    require "Conexion.php";

    class MostrarPeliculas extends Conexion{

        public function MostrarPeliculas(){
            parent::__construct();
            
        }
        
        public function get_peliculas(){

            $result=$this->conexion_db->query('SELECT * FROM peliculas');
            $peliculas= $result->fetch_all(MYSQLI_ASSOC);

            return $peliculas;

        }

    }

?>