<?php
require "Conexion.php";

class MostrarPeliculas extends Conexion {
    public function __construct() {
        parent::__construct();   
    }

    public function get_peliculas() {
        $result = $this->conexion_db->query("SELECT * FROM productos");
        $peliculas = $result->fetch_all(MYSQLI_ASSOC);
        return $peliculas;
    }
}
?>
