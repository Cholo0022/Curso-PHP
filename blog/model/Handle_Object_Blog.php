<?php

    include_once("Object_Blog.php");

    class Handle_Object_Blog{

        private $conexion;

        public function __construct($conexion){
            $this->conexion = $conexion;
        }      

        public function conexion(PDO $conexion){
            $this->conexion=$conexion;
        }

        public function getContenidoPorFecha(){
            $matriz = array();
            $contador=0;
            $result= $this->conexion->query("SELECT * FROM contenido ORDER BY fecha");

            while ($row = $result->fetch(PDO::FETCH_ASSOC)){

                $blog = new Object_Blog();
                $blog->setId($row["id"]);
                $blog->setTitle($row["titulo"]);
                $blog->setComment($row["comentario"]);
                $blog->setDate($row["fecha"]);
                $blog->setImage($row["imagen"]);

                $matriz[$contador] = $blog;

                $contador++;
            }
            return $matriz;
        }

        public function insert_content(Object_Blog $blog){
            $sql = "INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES (:title, :date, :comment, :image)";
            $stmt = $this->conexion->prepare($sql);
            
            // Bind parameters
            $stmt->bindParam(':title', $blog->getTitle());
            $stmt->bindParam(':date', $blog->getDate());
            $stmt->bindParam(':comment', $blog->getComment());
            $stmt->bindParam(':image', $blog->getImage());
        
            // Execute statement
            $stmt->execute();
        }
    
}

?>