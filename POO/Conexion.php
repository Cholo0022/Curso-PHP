<?php

require("Config.php");

class Conexion {
    protected $conexion_db;

    public function __construct(){
        $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);

        if ($this->conexion_db->connect_errno) {
            echo "Conexión fallida: " . $this->conexion_db->connect_error;
            return;
        }
        $this->conexion_db->set_charset(CHARSET);
    }
}
?>
