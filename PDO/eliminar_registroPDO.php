<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$codigo = $_GET["codigo"];

try {
$conexion = new PDO('mysql:host=localhost; dbname=tienda', 'root', '');
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->exec("SET CHARACTER SET utf8");

//$sql = "SELECT name, price, stock, color FROM products WHERE name = :nombre OR color = :color_art";
//$sql = "INSERT INTO productos (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)";
$sql =  "DELETE FROM productos WHERE id=:codigo";

$result=$conexion->prepare($sql);
$result->execute(array(":codigo"=>$codigo));

echo "Registro eliminado correctamente";

$result->closeCursor();

} catch (Exception $e){
    die ("Error: " . $e->getMessage());
}
finally{
    $conexion=null;
}
?>
</body>
</html>