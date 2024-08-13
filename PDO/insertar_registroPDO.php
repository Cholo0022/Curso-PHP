<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

try {
$conexion = new PDO('mysql:host=localhost; dbname=tienda', 'root', '');
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->exec("SET CHARACTER SET utf8");

//$sql = "SELECT name, price, stock, color FROM products WHERE name = :nombre OR color = :color_art";
$sql = "INSERT INTO productos (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)";

$result=$conexion->prepare($sql);
$result->execute(array(":nombre"=>$nombre, ":descripcion"=>$descripcion, ":precio"=>$precio));

echo "Registro insertado correctamente";

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