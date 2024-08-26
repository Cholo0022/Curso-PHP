<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    try{
        $conexion = new PDO("mysql:host=localhost; dbname=tienda", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARSET utf8");
        
        $sql = "SELECT * FROM datos_clientes";
        $result = $conexion->prepare($sql);
        $result->execute(array());

        $registros_por_pagina = 3;
        
        if (isset($_GET["pagina"])){
            $pagina = $_GET["pagina"];
        } else {
            $pagina = 1;    
           // header("location:index.php");
        }
       
        $empezar_desde = ($pagina-1)*$registros_por_pagina;


        $cantidad_registros = $result->rowCount();
        $cantidad_paginas = ceil($cantidad_registros / $registros_por_pagina);

        echo "Cantidad de registros " . $cantidad_registros . "<br>";
        echo "Cantidad de paginas " . $cantidad_paginas . "<br>";

        $sql_paginado = "SELECT * FROM datos_clientes LIMIT $empezar_desde, $registros_por_pagina";
        $result = $conexion->prepare($sql_paginado);
        $result->execute(array());

        while ($registro=$result->fetch(PDO::FETCH_ASSOC)){
            echo " Nombre: " . $registro["nombre"] . " Apellido: " . $registro["apellido"] . " Direccion: " . $registro["direccion"] . "<br>";
        }
            
            for ($i=1; $i<=$cantidad_paginas; $i++){
                echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
            }
                
        $result->closeCursor();

    } catch(Exception $e){
        die("Error " . $e->getMessage());
    }
    ?>
   
</body>
</html>