<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require("datos_conexion.php");

$conexion= mysqli_connect($db_host,$db_usuario,$db_password);

if(mysqli_connect_errno()){
    echo("Error conexión con la base de datos");
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("La base de datos no existe");


$query="SELECT * FROM products";

$result=mysqli_query($conexion,$query);



while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<form action='formulario_modificar.php' method='get'>";
    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
    echo $row["id"] . " - ";
    echo $row["name"]. " - ";
    echo $row["color"]. " - ";
    echo $row["description"];
    echo "<input type='submit' value='Modificar'>";
    echo "</form><br>";

}


mysqli_close($conexion);

?>    
</body>
</html>