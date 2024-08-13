<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    function mostrar_datos($busqueda){
        
        require("datos_conexion.php");

        $conexion= mysqli_connect($db_host,$db_usuario,$db_password);

        if(mysqli_connect_errno()){
            echo("Error conexión con la base de datos");
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("La base de datos no existe");


        $query="SELECT * FROM products WHERE name LIKE '%$busqueda%'";

        $result=mysqli_query($conexion,$query);



        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo $row["id"] . " - ";
            echo $row["color"]. " - ";
            echo $row["name"] . " ";
            echo $row["description"]. "<br>";
            echo "<br>";

        }


        mysqli_close($conexion);
    }
?>    
</head>
<body>

   <?php
    $buscando = $_GET["buscar"];
    $pagina = $_SERVER["PHP_SELF"];

    if ($buscando!=null){
        mostrar_datos($buscando);
    } else {
        echo("<form action='" . $pagina ."' method='get'> 
        <label>Buscar : <input type='text' name='buscar'></label>
        <input type='submit' value='Buscar'>
        </form>
        ");
    }
   ?>
    
</body>
</html>