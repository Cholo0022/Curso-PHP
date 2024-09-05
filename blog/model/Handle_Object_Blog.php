<?php

    include("Object_Blog.php");

    class Handle_Object_Blog{

        private $conexion;

        public function __construct($conexion){
            $this->setConexion = $conexion;
        }

        public function getConexion(PDO $conexion){
            $this->conexion=$conexion;
        }

        public function getContenidoPorFecha($fecha){
            $matriz = array();
            $contador=0;
            $result= $this->conexion->query("SELECT * FROM contenido ORDER BY fecha DESC");

            while($row = $result->fetch_assoc(PDO::FETCH_ASSOC)){

                $blog = new Object_Blog();
                $blog->setId = $row["id"];
                $blog->setTitle = $row["titulo"];
                $blog->setComment = $row["comentario"];
                $blog->setDate = $row["fecha"];
                $blog->setImage = $row["imagen"];

                $matriz[$contador] = $blog;

                $contador++;
            }
            return $matriz;
        }

    public function insert_content(Object_Blog $blog){
        $sql= "INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES ('" . $blog->getTitle() . "','" . $blog->getDate() . "','" . $blog->getComment() . "','" . $blog->getImage() . "')";
        $this->conexion->exec($sql);
    }
    
}

?>