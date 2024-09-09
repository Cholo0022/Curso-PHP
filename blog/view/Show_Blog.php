<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include("../model/Handle_Object_Blog.php");
        
        try {
            $conexion = new PDO("mysql:host=localhost; dbname=blog", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión exitosa"; 

            $handle_object = new Handle_Object_Blog($conexion);
            $table_blog= $handle_object->getContenidoPorFecha();
            //var_dump($table_blog);
            if (empty($table_blog)){
                echo "No hay entradas de blog todavia";
            }else{
                foreach($table_blog as $valor){
                    echo "<h3>" . $valor->getTitle() . "</h3>";
                    echo "<h4>" . $valor->getDate() . "</h4>";
                    echo "<div style='width=400px'>";
                    echo $valor->getComment() . "</div>";
                    if ($valor->getImage() != ""){
                        echo "<img src='../img/";
                        echo $valor->getImage() . "' width='300px' height='200px'/>";
                    }
                    
                    echo "<hr/>";
                }
            }

            
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    
    ?>
    <br>
    <a href="Form_Blog.php">Volver al formulario</a>
</body>
</html>